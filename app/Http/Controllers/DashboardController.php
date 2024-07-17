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

        return view('Dashboard.index', compact('loan'));
    }
}
