<?php

use App\Http\Controllers\AuthController;
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

Route::post('register', [AuthController::class,'registerCustomer']);
Route::post('login', [AuthController::class,'loginCustomer']);
Route::post('register-employer', [AuthController::class,'registerEmployer']);
Route::post('login-employer', [AuthController::class,'loginEmployer']);


Route::middleware('auth:sanctum')->group(function () {
    Route::get('customer', [AuthController::class,'customer']);
    Route::get('logout', [AuthController::class,'logoutCustomer']);
    Route::get('employer', [AuthController::class,'employer']);
    Route::get('logout-employer', [AuthController::class,'logoutEmployer']);

});
Route::post('create-post',[\App\Http\Controllers\PostController::class,'createPost']);
Route::get('list-post',[\App\Http\Controllers\PostController::class,'getList']);
Route::get('update-post/{id}',[\App\Http\Controllers\PostController::class,'update']);
Route::post('edit-post/{id}',[\App\Http\Controllers\PostController::class,'edit']);
Route::get('delete/{id}', [\App\Http\Controllers\PostController::class, 'destroy']);
Route::get('cities', [\App\Http\Controllers\PostController::class, 'getCity']);
Route::get('jobs', [\App\Http\Controllers\PostController::class, 'getJob']);

