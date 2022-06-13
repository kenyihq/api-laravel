<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerCategory;

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