<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ExportPDFController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return redirect('/admin');
// });

Route::get('/', function () {
    return redirect('/landing');  
});

Route::get('/landing', function () {
    $products = Product::with('category')->get();
    return view('landing', compact('products'));
});

Route::get('/laporan/export/pdf', [ExportPDFController::class, 'export'])->name('laporan.export.pdf');

Route::get('/print/second/{invoice}', [PrintController::class, 'printSecond'])
    ->name('print.second');

