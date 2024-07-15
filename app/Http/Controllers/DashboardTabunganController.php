<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTabunganController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.tabungan.index');
    }

}
