<?php

use App\Http\Controllers\InvoiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('invoices', function () {
//     return view('invoices');
// })->name('invoices');

Route::get('invoices', [InvoiceController::class, 'show'])->name('invoices');

Route::post('invoices-create', [InvoiceController::class, 'create']);