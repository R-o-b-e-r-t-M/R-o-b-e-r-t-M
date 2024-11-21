<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get-name', action: [InvoiceController::class, 'jsonResponse']);

Route::get('index', action: [InvoiceController::class, 'index']);

Route::post('store', action: [InvoiceController::class, 'store']);

Route::get('show/{id}', action: [InvoiceController::class, 'show']);

Route::put('update/{id}', action: [InvoiceController::class, 'update']);

Route::delete('destroy/{id}', action: [InvoiceController::class, 'destroy']);


Route::apiResource('users', UserController::class)->middleware('auth:sanctum');

Route::apiResource('tasks', TaskController::class);

Route::post('login', [LoginController::class,'login']);

Route::post('register', [LoginController::class, 'register']);