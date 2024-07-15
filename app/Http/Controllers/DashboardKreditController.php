<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardKreditController extends Controller
{
    //
    public function index()
    {
        return view('dashboard.kredit.index');
    }

}
