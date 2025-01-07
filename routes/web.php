<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\ImpactReportController;
use App\Http\Controllers\ShopController;


// Halaman utama (Barang)
Route::get('/', [BarangController::class, 'index']);

// Halaman Impact Report
Route::get('/impact-report', [ImpactReportController::class, 'index']);
Route::get('/impact-report', [ImpactReportController::class, 'index'])->name('impact.report');
Route::get('/', [BarangController::class, 'index'])->name('best.selling');
Route::get('/shop', [ShopController::class, 'index']);