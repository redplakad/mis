<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardNeracaController extends Controller
{
    //
    public function index()
    {
        return view('Dashboard.neraca.index');
    }

}
