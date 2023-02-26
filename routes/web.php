<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
})->name('/');
Route::get('calc', [\App\Http\Controllers\UserController::class, 'calcView'])->name('calc');
Route::post('calc', [\App\Http\Controllers\UserController::class, 'calcPost']);
Route::get('shop', [\App\Http\Controllers\UserController::class, 'shopView'])->name('shop');
Route::post('shop', [\App\Http\Controllers\UserController::class, 'shopPost']);
