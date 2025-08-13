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

Route::prefix('crud')->group(function () {
    Route::get('index', [CrudController::class,'index'])->name('crud.index');
    Route::get('create', [CrudController::class,'create'])->name('crud.create');
    Route::post('create', [CrudController::class,'store'])->name('crud.store');
    Route::get('update/{id}', [CrudController::class,'edit'])->name('crud.edit');
    Route::put('update/{id}', [CrudController::class,'update'])->name('crud.update');
    Route::delete('destroy/{id}', [CrudController::class,'destroy'])->name('crud.destroy');
});
