<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('hello', function () {
    return view('coba.index');
});
Route::get('tambah', [CalculatorController::class,'viewTambah']);
Route::post('tambah', [CalculatorController::class,'tambahAction'])->name('tambah.store');
Route::get('kurang', [CalculatorController::class,'viewKurang']);
Route::post('kurang', [CalculatorController::class,'kurangAction'])->name('kurang.store');
Route::get('kali', [CalculatorController::class,'viewKali']);
Route::post('kali', [CalculatorController::class,'kaliAction'])->name('kali.store');
Route::get('bagi', [CalculatorController::class,'viewBagi']);
Route::post('bagi', [CalculatorController::class,'bagiAction'])->name('bagi.store');

Route::get('index', [CrudController::class,'index']);
Route::get('create', [CrudController::class,'']);
