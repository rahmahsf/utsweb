<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login',[AuthenticationController::class, 'indexlogin'])->name('login');
Route::get('/register',[AuthenticationController::class, 'indexregister'])->name('register');
Route::post('/login',[AuthenticationController::class,'authentication'])->name('auth.authentication');
Route::post('/register',[AuthenticationController::class,'createUser'])->name('auth.createUser');
Route::get('/logout',[AuthenticationController::class,'logout'])->name('auth.logout')->middleware('auth');

Route::get('/home', [HomeController::class,'index'])->name('index');
Route::get('/katalog',[HomeController::class,'indexkatalog'])->name('katalog');


Route::resource('/dashboard', FlowerController::class)->middleware('auth');

