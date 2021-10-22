<?php

use App\Http\Controllers\Admin\Users\CrawnCotroller;
use App\Http\Controllers\Admin\Users\LoginController;
use App\Http\Controllers\Admin\Users\MainController;
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

Route::get('admin/users/login',[LoginController::class,'index'])->name('DangNhap');
Route::get('signup',[LoginController::class,'signup']);
Route::post('admin/users/login/store',[LoginController::class,'store']);
Route::get('admin/main',[MainController::class,'index'])->name('main');
Route::get('users',[MainController::class,'users']);
Route::get('admin/users/crawn',[CrawnCotroller::class,'crawn']);
Route::get('test',[CrawnCotroller::class,'test']);



