<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\ChatController;



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
    if(auth()->user()){
        return redirect('/profile');
    }
    else{
    return view('login');
    }
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ChatbotController::class, 'profile'])->name('profile');

Route::get('/show', [App\Http\Controllers\ChatbotController::class, 'list']);

Route::get('/login', [App\Http\Controllers\logincontroller::class, 'index']);
Route::get('/logout', [App\Http\Controllers\logincontroller::class, 'logout']);
Route::get('/signup', [App\Http\Controllers\logincontroller::class, 'signup']);
Route::post('/login', [App\Http\Controllers\logincontroller::class, 'login'])->name('login');
Route::post('/signup', [App\Http\Controllers\logincontroller::class, 'register'])->name('signup');


Route::get('/insert_form', [App\Http\Controllers\DataInsertController::class, 'insert_form']);
Route::post('/insert', [App\Http\Controllers\DataInsertController::class, 'insert']);




Route::get('/search', [App\Http\Controllers\DataInsertController::class, 'search'])->name('product.search');
Route::get('/searchshow', [App\Http\Controllers\DataInsertController::class, 'searchshow']);

Route::post('/retrieve-data', [App\Http\Controllers\DataInsertController::class, 'DataInsertContrller@retrieveData']);


