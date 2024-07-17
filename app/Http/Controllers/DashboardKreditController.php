<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisLoan;
use Carbon\Carbon;

class DashboardKreditController extends Controller
{
    //
    public function index()
    {
        $cab = '007';
        $datadate = '2024-07-08';
        $loan = new \stdClass();

        // mengambil 25 debitur terbesar
        $Loan25Top = MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->orderBy('POKOK_PINJAMAN', 'desc')->take(25)->get();

        // Menghitung jumlah debitur yang memiliki tunggakan hari
        $count_tunggakan_hari = [
            'tunggakan_7h' => MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->whereBetween('JML_HARI_TUNGGAKAN', [1, 7])->count(),
            'tunggakan_14h' => MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->whereBetween('JML_HARI_TUNGGAKAN', [8, 14])->count(),
            'tunggakan_1b' => MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->whereBetween('JML_HARI_TUNGGAKAN', [15, 30])->count(),
            'tunggakan_2b' => MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->whereBetween('JML_HARI_TUNGGAKAN', [31, 60])->count(),
            'tunggakan_3b' => MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->whereBetween('JML_HARI_TUNGGAKAN', [60, 90])->count(),
        ];

        $loan->nominal_bakidebet = number_format((MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->sum('POKOK_PINJAMAN'))/1000);
        $loan->nominal_pencairan = number_format(MisLoan::whereRaw('LEFT(TGL_PK, 6) = ?', [Carbon::now()->format('Ym')])->sum('POKOK_PINJAMAN')/1000);
        $loan->nominal_NPL = number_format((MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->whereBetween('KODE_KOLEK', [3, 5])->sum('POKOK_PINJAMAN'))/1000);
        $loan->nominal_PPAP = number_format((MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->sum('CADANGAN_PPAP'))/1000);

        $loan->daftar_produk = MisLoan::select('KET_KD_PRD')->distinct()->get();


        return view('Dashboard.kredit.index', compact('Loan25Top', 'count_tunggakan_hari', 'loan'));
    }

    public function overdue($range, Request $request)
    {
        if($request->payment_type)
        {
            $range = $request->payment_type;
        }

        $overdue = (object) ['title' => ""];
        $query = MisLoan::query();

        if ($request->has('keyword')) {
            $keyword = $request->keyword;
            $query->where('NAMA_NASABAH', 'like', '%' . $keyword . '%');
        }

        switch ($range) {
            case '7h':
                $query->whereBetween('JML_HARI_TUNGGAKAN', [1, 7]);
                $overdue = (object) ['title' => "7 Hari"];
                break;
            case '14h':
                $query->whereBetween('JML_HARI_TUNGGAKAN', [8, 14]);
                $overdue = (object) ['title' => "14 Hari"];
                break;
            case '1b':
                $query->whereBetween('JML_HARI_TUNGGAKAN', [15, 30]);
                $overdue = (object) ['title' => "1 Bulan"];
                break;
            case '2b':
                $query->whereBetween('JML_HARI_TUNGGAKAN', [31, 60]);
                $overdue = (object) ['title' => "2 Bulan"];
                break;
            case '3b':
                $query->whereBetween('JML_HARI_TUNGGAKAN', [60, 90]);
                $overdue = (object) ['title' => "3 Bulan"];
                break;
            default:
                abort(404); // Jika range tidak valid, tampilkan halaman 404
        }

        $tunggakan = $query->paginate(50); // Menambahkan pagination dengan jumlah data per halaman 10

        // Lakukan sesuatu dengan $tunggakan, misalnya lempar ke view atau return sebagai JSON
        return view('Dashboard.kredit.overdue.index', compact('tunggakan', 'overdue'));
    }

    // additional function
    public function segment_product_count($datadate, $cab)
    {
        $sp_count = [];
        $product = MisLoan::select('KET_KD_PRD')->distinct()->get();
        foreach($product as $prd)
        {
            $count = MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->where('KET_KD_PRD', $product_code)->count();

            $sp_count[str_replace(' ', '_', $prd->KET_KD_PRD)] = $count;
        }

        return $sp_count;
    }
}
