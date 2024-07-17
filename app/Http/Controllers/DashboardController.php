<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisLoan;
use Carbon\Carbon;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $cab = '007';
        $datadate = '2024-07-08';
        $loan = new \stdClass();

        $loan->daftar_produk = MisLoan::select('KET_KD_PRD')->distinct()->get();

        return view('Dashboard.index', compact('loan'));
    }
}
