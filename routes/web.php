<?php

use App\Http\Controllers\Api\v1\CategoryPostController;
use App\Http\Controllers\Api\v1\CustomerController;
use App\Http\Controllers\Api\v2\CustomerController as V2CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaivietController;
use App\Http\Controllers\HomeController;
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



Route::get('/admin', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [HomeController::class, 'index'])->name('main');

Route::get('/bai-viet/{id}', [BaivietController::class, 'show'])->name('bai-viet');

require __DIR__.'/auth.php';

