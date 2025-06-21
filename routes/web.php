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