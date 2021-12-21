<?php

use App\Http\Controllers\ApplynowController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\SearchController;
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

Route::prefix('customers')->group(function () {
    Route::get('list',[CustomerController::class,'list']);
    Route::get('delete/{id}',[CustomerController::class,'destroy']);
    Route::get('update/{id}',[CustomerController::class,'update']);
    Route::post('edit/{id}',[CustomerController::class,'edit']);
});

Route::prefix('employers')->group(function () {
    Route::get('list',[EmployerController::class,'list']);
    Route::get('delete/{id}',[EmployerController::class,'destroy']);
    Route::get('update/{id}',[EmployerController::class,'update']);
    Route::post('edit/{id}',[EmployerController::class,'edit']);
    Route::get('show/{id}',[EmployerController::class,'show']);
    Route::get('top-employer',[EmployerController::class,'topEmployer']);
});

Route::prefix('apply-now')->group(function () {
    Route::get('list/{employer_id}', [ApplynowController::class, 'getAll']);
    Route::get('detail/{id}', [ApplynowController::class, 'show']);
    Route::put('update/{id}', [ApplynowController::class, 'update']);
    Route::post('create', [ApplynowController::class, 'create']);
    Route::delete('delete/{id}', [ApplynowController::class, 'destroy']);
});

Route::prefix('search')->group(function () {
    Route::post('post',[SearchController::class,'searchPost']);
    Route::post('employer',[SearchController::class,'searchEmployer']);
    Route::get('city',[SearchController::class,'getCity']);
    Route::get('job',[SearchController::class,'getJob']);

});
