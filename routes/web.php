<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/login',[UserController::class,'getLogin'])->name('login');
Route::post('/login',[UserController::class,'Login'])->name('loginIn');

Route::get('/register',[UserController::class,'getRegister'])->name('register');
Route::post('/register',[UserController::class,'register'])->name('signIn');

Route::post('/register-post',[UserController::class,'MusteriEklePost'])->name('register-post');


 Route::get('/shopping', [UserController::class,'shopping'])->name('shopping');
     
Route::get('/welcome', [UserController::class, 'welcome'])->name('welcome');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/urunler', [UserController::class, 'urunler'])->name('urunler');

Route::get('/home', function () {
    return view('welcome');
})->name('home');





