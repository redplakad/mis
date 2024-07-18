<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisLoan;
use App\Services\MisLoanService;
use Carbon\Carbon;

class DashboardKreditController extends Controller
{
    //
    protected $misLoanService;

    public function __construct(MisLoanService $misLoanService)
    {
        $this->misLoanService = $misLoanService;
    }

    public function index()
    {
        $cab = '007';
        $datadate = '2024-07-08';
        $loan = new \stdClass();

        // mengambil 25 debitur terbesar
        $Loan25Top = $this->misLoanService->getTop25Loans($datadate, $cab);

        // Menghitung jumlah debitur yang memiliki tunggakan hari
        $countTunggakanHari         = $this->misLoanService->calculateOverdue($datadate, $cab);
        $loan->nominal_bakidebet    = number_format(($this->misLoanService->sumBakiDebet($datadate, $cab)) / 1000);
        $loan->nominal_pencairan    = number_format($this->misLoanService->sumPencairanBulanIni($datadate, $cab) / 1000);
        $loan->nominal_NPL          = number_format(($this->misLoanService->sumNPL($datadate, $cab)) / 1000);
        $loan->nominal_PPAP         = number_format(($this->misLoanService->sumPPAP($datadate, $cab)) / 1000);
        $loan->daftar_produk        = $this->misLoanService->getDistinctProducts();
        $loan->product_count        = $this->misLoanService->segmentProductCount($datadate, $cab);
        $loan->product_sum          = $this->misLoanService->segmentProductSum($datadate, $cab);

        for ($i=1; $i <= 5; $i++) {
            $loan->loanKolCount[$i] = $this->misLoanService->loanKolektibilitasCount($datadate, $cab, $i);
            $loan->loanKolDesc[$i] = $this->misLoanService->loanDescriptionKolektibilitas($i);
        }
        for ($i=1; $i <= 5; $i++) {
            $loan->loanKolSum[$i] = $this->misLoanService->loanKolektibilitasSum($datadate, $cab, $i);
        }

        return view('Dashboard.kredit.index', compact('Loan25Top', 'countTunggakanHari', 'loan'));
    }

    // Telat bayar
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

    // Mendapatkan count untuk masing-masing produk kredit
    public function segment_product_count($datadate, $cab)
    {
        $sp_count = [];
        $product = MisLoan::select('KET_KD_PRD')->distinct()->get();
        foreach($product as $prd)
        {
            $count = MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->where('KET_KD_PRD', $prd->KET_KD_PRD)->count();

            $sp_count[str_replace(' ', '_', $prd->KET_KD_PRD)] = $count;
        }

        return $sp_count;
    }

    // Mendapatkan sum untuk masing-masing produk kredit
    public function segment_product_sum($datadate, $cab)
    {
        $sp_sum = [];
        $product = MisLoan::select('KET_KD_PRD')->distinct()->get();
        foreach($product as $prd)
        {
            $sum = MisLoan::where('DATADATE', $datadate)->where('CAB', $cab)->where('KET_KD_PRD', $prd->KET_KD_PRD)->sum('POKOK_PINJAMAN');

            $sp_sum[str_replace(' ', '_', $prd->KET_KD_PRD)] = $sum;
        }

        return $sp_sum;
    }
}
