<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PaymentContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/payments', [PaymentContoller::class, 'create']);
Route::post('/webhooks/midtrans', [PaymentContoller::class, 'webhook']);
Route::post('/page', [PaymentContoller::class, 'create'])->name('payments.create');
// Route::get('/page', [PagesController::class, 'index']);
