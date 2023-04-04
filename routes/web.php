<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', [\App\Http\Controllers\PagesController::class,'home']);
Route::get('/about',[\App\Http\Controllers\pages_controller::class,'show_about_us']);
Route::get('/', function () {return view('welcome');});
Route::get('/register', [\App\Http\Controllers\LoginController::class, 'create_user'])->name('register');
Route::post('/register', [\App\Http\Controllers\LoginController::class, 'store_user'])->name("store.register");

Route::group(['middleware' => 'auth'], function () {    
    Route::get('/create_game', [\App\Http\Controllers\PagesController::class, 'create_game'])->name('create_game');
    Route::post('/create_game', [\App\Http\Controllers\PagesController::class, 'store_game'])->name("store.game");
Route::get('/admin_page', [\App\Http\Controllers\LoginController::class, 'admin_page']);
Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

});


Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store_login'])->name("store.login");

