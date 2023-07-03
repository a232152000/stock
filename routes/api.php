<?php

use App\Http\Controllers\UserStock\IndexController;
use App\Http\Middleware\CheckAuthentication;
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

Route::prefix('user-stock')->middleware(CheckAuthentication::class)->group(function () {
    Route::get('/', IndexController::class)->name('user-stock.list');
});
