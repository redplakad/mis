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
        $datadate = '2024-07-18';
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
        if ($request->payment_type) {
            return redirect()->route('overdue.show', ['range' => $request->payment_type]);
        }

        $result = $this->misLoanService->getOverdueLoans($range, $request);
        $tunggakan = $result['tunggakan'];
        $overdue = $result['title'];

        return view('Dashboard.kredit.overdue.index', compact('tunggakan', 'overdue'));
    }
}
