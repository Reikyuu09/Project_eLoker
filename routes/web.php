<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IsiLamaranController;
use App\Http\Controllers\LamaranController;
use Illuminate\Support\Facades\Auth;


Route::middleware(['admin'])->prefix('dashboard')->group(function () {
    Route::resource('lamaran', LamaranController::class);
});


Route::get('/login', function (){
    return view('login');
})->name('login');


Route::get('/register', function (){
    return view('dashboard', [
        'pageSlug' => 'dashboard'
    ]);
})->name('register');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('admin')->name('dashboard');

Route::get('/', [AuthController::class, 'home'])->name('home');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('admin')->name('dashboard');
Route::get('/user', [AuthController::class, 'user'])->middleware('auth')->name('user');
Route::get('/form', [AuthController::class, 'form']);
Route::post('/form', [AuthController::class, 'submitForm'])->name('form.submit');
Route::get('/lamaran/form', [IsiLamaranController::class, 'create'])->name('lamaran.form');
Route::post('/lamaran', [IsiLamaranController::class, 'store'])->name('lamaran.store');