<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
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
//  Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');

// Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

// Route::get('/add-post',[PostController::class,'addPost']);
// Route::get('/create',[PostController::class,'create'])->name('post.create');
// Route::post('/post.store',[PostController::class,'store'])->name('post.store');
// Route::get('/posts ',[PostController::class,'getPost']);
// Route::get('/delete-post/{id}',[PostController::class,'deletePost']);

Route::get('/customers',[CustomerController::class,'index']);
Route::post('/customer',[CustomerController::class,'store']);
Route::get('/customers/{id}',[CustomerController::class,'show']);
Route::put('/customers/{id}',[CustomerController::class,'update']);
Route::delete('/customers/{id}',[CustomerController::class,'destroy']);
