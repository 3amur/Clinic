<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::get('/major',[MajorController::class,'index'])->name('major');

Route::get('/contact',[ContactController::class,'index'])->name('contact');

Route::get('/history',[HistoryController::class,'index'])->name('history');

Route::get('/login',[LoginController::class,'index'])->name('login');

Route::get('/register',[RegisterController::class,'index'])->name('register');