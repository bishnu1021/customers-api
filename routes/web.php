<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('welcome');
});
Route::get('/auth/login',[MainController::class,'login'])->name('auth.login');
// Route::view('/customer-info',[MainController::class,'dashboard'])->name('customer-info');
Route::post('/auth/check',[MainController::class,'check'])->name('auth.check');

Route::get('/add-post',[PostController::class,'addPost']);
Route::get('/create',[PostController::class,'create'])->name('post.create');
Route::post('/post.store',[PostController::class,'store'])->name('post.store');
Route::get('/posts ',[PostController::class,'getPost']);
Route::get('/delete-post/{id}',[PostController::class,'deletePost']);

