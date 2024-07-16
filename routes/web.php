<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardNeracaController;
use App\Http\Controllers\DashboardKreditController;
use App\Http\Controllers\DashboardTabunganController;
use App\Http\Controllers\DashboardDepositoController;
use App\Http\Controllers\MisLoanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('Dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/neraca', [DashboardNeracaController::class, 'index'])->name('dashboard.neraca');
    Route::get('/kredit', [DashboardKreditController::class, 'index'])->name('dashboard.kredit');
    Route::get('/tabungan', [DashboardTabunganController::class, 'index'])->name('dashboard.tabungan');
    Route::get('/deposito', [DashboardDepositoController::class, 'index'])->name('dashboard.deposito');

    // Route List untuk Kredit
    Route::get('/overdue/{range}', [DashboardKreditController::class, 'overdue'])->name('overdue.show');
    Route::post('/overdue/{range}', [DashboardKreditController::class, 'overdue'])->name('overdue.search');

    Route::get('/import/loan', function(){
        return view('import.loan');
    });
    Route::post('/import/loan', [MisLoanController::class, 'import'])->name('import.loan');
});

require __DIR__.'/auth.php';
