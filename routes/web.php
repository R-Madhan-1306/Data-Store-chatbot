<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ChatbotController;
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

Route::get('/', function () {
    return view('login');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ChatbotController::class, 'profile'])->name('profile');

Route::get('/login', [App\Http\Controllers\logincontroller::class, 'index']);
Route::get('/logout', [App\Http\Controllers\logincontroller::class, 'logout']);
Route::get('/signup', [App\Http\Controllers\logincontroller::class, 'signup']);
Route::post('/login', [App\Http\Controllers\logincontroller::class, 'login'])->name('login');
Route::post('/signup', [App\Http\Controllers\logincontroller::class, 'register'])->name('signup');

