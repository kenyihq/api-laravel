<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCategory;
use App\Http\Controllers\ControllerProduct;

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

// Category API

Route::get('category', [ControllerCategory::class, 'getCategory']);

Route::get('category/{id}', [ControllerCategory::class, 'getCategoryId']);

Route::post('category', [ControllerCategory::class, 'addCategory']);

Route::put('category/{id}', [ControllerCategory::class, 'updateCategory']);

Route::delete('category/{id}', [ControllerCategory::class, 'deleteCategory']);

// Product API

Route::get('product', [ControllerProduct::class, 'getProducts']);

Route::get('product/{id}', [ControllerProduct::class, 'getProductId']);

Route::post('product', [ControllerProduct::class, 'addProduct']);

Route::put('product/{id}', [ControllerProduct::class, 'updateProduct']);

Route::delete('product/{id}', [ControllerProduct::class, 'deleteProduct']);