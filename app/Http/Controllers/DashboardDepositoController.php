<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardDepositoController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.deposito.index');
    }

}
