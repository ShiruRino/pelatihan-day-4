<?php

use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\CalculatorController;

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
Route::get('login', [AuthController::class,'index'])->name('login');
Route::post('store/login', [AuthController::class,'store'])->name('store.login');
Route::middleware('auth')->group(function () {
    Route::get('dashboard/student', [StudentController::class, 'index'])->name('student');
    Route::get('dashboard/leader', [LeaderController::class, 'index'])->name('leader');
    Route::middleware('PIC')->group(function () {
        Route::get('dashboard/pic', [PicController::class, 'index'])->name('pic');
    });
    Route::middleware('INST')->group(function () {
        Route::get('dashboard/instructor', [InstructorController::class, 'index'])->name('instructor');
        Route::get('manage/student/instructor', [InstructorController::class, 'indexStudents'])->name('student.instructor');
        Route::get('create/student/instructor', [StudentController::class, 'create'])->name('create.student.instructor');
        Route::post('store/student/instructor', [StudentController::class, 'store'])->name('store.student.instructor');
    });
});
Route::post('logout', [AuthController::class,'logout']);
