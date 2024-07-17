<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisLoan;

class DashboardKreditController extends Controller
{
    //
    public function index()
    {
        $cab = '007';
        $datadate = '2024-07-08';

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


        return view('Dashboard.kredit.index', compact('Loan25Top', 'count_tunggakan_hari'));
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

        $tunggakan = $query->paginate(10); // Menambahkan pagination dengan jumlah data per halaman 10

        // Lakukan sesuatu dengan $tunggakan, misalnya lempar ke view atau return sebagai JSON
        return view('Dashboard.kredit.overdue.index', compact('tunggakan', 'overdue'));
    }

}
