<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\LogoutController;

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
    $id = null;
    return view('home.index', compact('id'));
});

/*
|--------------------------------------------------------------------------
| login Routes
|--------------------------------------------------------------------------
*/
Route::get('/login',  [LoginController::class,'index'])->name('login.index');
Route::post('/login', [LoginController::class,'verify']);
/*
|--------------------------------------------------------------------------
| login Routes
|--------------------------------------------------------------------------
*/
Route::get('/register',  [registerController::class,'index']);
Route::post('/register', [registerController::class,'create']);
/*
|--------------------------------------------------------------------------
| logout Routes
|--------------------------------------------------------------------------
*/
Route::get('/logout', [LogoutController::class,'index']);


Route::get('/home', [homeController::class,'index'])->name('home.index');
