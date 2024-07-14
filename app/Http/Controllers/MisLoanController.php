<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MisLoanImport; // Sesuaikan dengan namespace import yang sesuai
use App\Models\MisLoan;

class MisLoanController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');
        $datadate = $request->input('datadate');

        Excel::import(new MisLoanImport($datadate), $file);

        return redirect()->back()->with('success', 'CSV imported successfully!');
    }
}
