<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataSiswaController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('biodata', BiodataSiswaController::class)->parameters([
    'biodata' => 'biodataSiswa'
]);
    Route::resource('kelas', KelasController::class);
    Route::resource('siswa', SiswaController::class);
    Route::resource('nilai', NilaiController::class);
});