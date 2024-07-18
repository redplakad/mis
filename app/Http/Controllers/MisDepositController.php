<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MisDepositImport; // Sesuaikan dengan namespace import yang sesuai
use App\Models\MisDeposit;

class MisDepositController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $datadate = $request->input('datadate');

        Excel::import(new MisDepositImport($datadate), $file);

        return redirect()->back()->with('success', 'CSV imported successfully!');
    }
}
