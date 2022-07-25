<?php

use App\Http\Controllers\Api\v1\CategoryPostController;
use App\Http\Controllers\Api\v1\CustomerController;
use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\Api\v2\CustomerController as V2CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::resource('v1/customer', CustomerController::class)->only(['index', 'show', 'update', 'destroy', 'store']);
// Route::resource('customer', CustomerController::class)->except(['edit', 'create']);

Route::resource('/', HomeController::class)->only(['index']);;

Route::prefix('v1')->group(function () {
    Route::resource('customer', CustomerController::class)->only(['show', 'update', 'destroy', 'store']);

    Route::resource('customer', CustomerController::class)->only(['index']);

    Route::resource('category', CategoryPostController::class);

    Route::resource('post', PostController::class);
});

Route::prefix('v2')->group(function () {
    // Route::resource('customer',CustomerController::class)->only(['show', 'update', 'destroy', 'store']);

    Route::resource('customer', V2CustomerController::class)->only(['show']);
});
