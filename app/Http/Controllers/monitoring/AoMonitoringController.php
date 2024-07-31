<?php

namespace App\Http\Controllers\Monitoring;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AoMonitoringController extends Controller
{
    //
    public function index(){
        return view('monitoring.ao.index');
    }
}
