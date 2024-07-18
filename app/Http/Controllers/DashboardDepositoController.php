<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisDeposit;
use App\Services\MisDepositService;
use Carbon\Carbon;

class DashboardDepositoController extends Controller
{
    //
    protected $misDepositService;

    public function __construct(MisDepositService $misDepositService)
    {
        $this->misDepositService = $misDepositService;
    }
    public function index()
    {
        $cab = '007';
        $datadate = '2024-07-18';

        $deposit = new \stdClass();

        $deposit->account       = number_format($this->misDepositService->depositAccountCount($datadate, $cab));
        $deposit->balance       = number_format($this->misDepositService->depositBalanceSum($datadate, $cab)/1000);
        $deposit->products      = $this->misDepositService->getDistinctProducts();
        $deposit->product_count = $this->misDepositService->segmentProductCount($datadate, $cab);
        $deposit->product_sum   = $this->misDepositService->segmentProductSum($datadate, $cab);

        return view('Dashboard.deposito.index', compact('deposit'));
    }

}
