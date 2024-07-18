<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisLoan;
use App\Services\MisLoanService;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    protected $misLoanService;

    public function __construct(MisLoanService $misLoanService)
    {
        // inisialisasi Loan Services
        $this->misLoanService = $misLoanService;
    }

    public function index()
    {
        $cab = '007';
        $datadate = '2024-07-08';
        $loan = new \stdClass();

        $loan->daftar_produk = $this->misLoanService->getDistinctProducts();
        $loan->product_count = $this->misLoanService->segmentProductCount($datadate, $cab);
        $loan->product_sum = $this->misLoanService->segmentProductSum($datadate, $cab);

        for ($i=1; $i <= 5; $i++) {
            $loan->loanKolCount[$i] = $this->misLoanService->loanKolektibilitasCount($datadate, $cab, $i);
            $loan->loanKolDesc[$i] = $this->misLoanService->loanDescriptionKolektibilitas($i);
        }
        for ($i=1; $i <= 5; $i++) {
            $loan->loanKolSum[$i] = $this->misLoanService->loanKolektibilitasSum($datadate, $cab, $i);
        }

        return view('Dashboard.index', compact('loan'));
    }
}
