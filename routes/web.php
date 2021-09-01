<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SellerController;

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
Route::get('/register', function(){
    return view('register');
});

Auth::routes();

// auth middelware
Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/user/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::resource('/profil', ProfilController::class);
    Route::resource('/pedagang', SellerController::class);
});