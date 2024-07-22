<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisDeposit;
use App\Services\MisDepositService;
use Carbon\Carbon;
use DataTables;

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
        $deposit->sum_new_acc   = number_format($this->misDepositService->sumDepositNewAccount($datadate, $cab)/1000);
        $deposit->sum_overdue   = number_format($this->misDepositService->sumDepositOverdue($datadate, $cab)/1000);

        return view('Dashboard.deposito.index', compact('deposit'));
    }

    public function getData(Request $request)
    {
        $cab = '007';
        $datadate = '2024-07-18';
        if($request->ajax()){
            $model = MisDeposit::query()->where('DATADATE', $datadate)->where('CAB', $cab);

            if($request->has('product')){
                if(!empty($request->input('product'))){
                    $model = $model->where('KET_KD_PRD', str_replace("_", " ", $request->input('product')));
                }
            }
            return DataTables::eloquent($model)
                            ->setFilteredRecords(50)
                            ->addColumn('NILAI_EFEKTIF', function ($data) {
                                return number_format($data->NILAI_EFEKTIF); // Format dengan 2 desimal, koma sebagai pemisah desimal, dan titik sebagai pemisah ribuan
                            })->toJson();
        }
    }

    public function nominatif(){
        $product = $this->misDepositService->getDistinctProducts();
        return view('Dashboard.deposito.nominatif.index', compact('product'));
    }

}
