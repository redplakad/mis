<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MisSavingJournalImport; // Sesuaikan dengan namespace import yang sesuai
use App\Models\MisSavingJournal;

class MisSavingJournalController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);

        $file = $request->file('file');

        Excel::import(new MisSavingJournalImport(), $file);

        return redirect()->back()->with('success', 'CSV imported successfully!');
    }
    public function index()
    {
        return view('import.savingJournal');
    }
}
