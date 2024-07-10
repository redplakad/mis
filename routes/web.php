<?php

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
    return view('dashboard.index');
})->name('dashboard');
Route::get('/neraca', function(){
    return view('dashboard.neraca');
})->name('dashboard.neraca');

Route::get('/kredit', function(){
    return view('dashboard.kredit');
})->name('dashboard.kredit');

Route::get('/tabungan', function(){
    return view('dashboard.tabungan');
})->name('dashboard.tabungan');

Route::get('/deposito', function(){
    return view('dashboard.deposito');
})->name('dashboard.deposito');
