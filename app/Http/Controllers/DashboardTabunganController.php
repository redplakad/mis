<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisSaving;
use App\Services\MisSavingService;
use Carbon\Carbon;

class DashboardTabunganController extends Controller
{
    //
    public function __construct(MisSavingService $misSavingService)
    {
        $this->misSavingService = $misSavingService;
    }

    public function index()
    {

        $cab = '007';
        $datadate = '2024-07-18';

        $saving = new \stdClass();

        $saving->account       = number_format($this->misSavingService->SavingAccountCount($datadate, $cab));
        $saving->balance       = number_format($this->misSavingService->SavingBalanceSum($datadate, $cab)/1000);
        $saving->products      = $this->misSavingService->getDistinctProducts();
        $saving->product_count = $this->misSavingService->segmentProductCount($datadate, $cab);
        $saving->product_sum   = $this->misSavingService->segmentProductSum($datadate, $cab);

        $saving->branches      = $this->misSavingService->getDistinctBranches();
        $saving->branch_account_count = $this->misSavingService->segmentBranchCount($datadate, $cab);
        $saving->branch_balance_sum   = $this->misSavingService->segmentBranchSum($datadate, $cab);

        return view('Dashboard.tabungan.index', compact('saving'));
    }

}
