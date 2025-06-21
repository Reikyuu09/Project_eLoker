<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;





Route::get('/login', function (){
    return view('login');
})->name('login');

Route::get('/register', function (){
    return view('register');
})->name('register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('admin')->name('dashboard');

Route::get('/', [AuthController::class, 'home'])->name('home');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('admin')->name('dashboard');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth')->name('user');
Route::get('/form', [AuthController::class, 'form']);
