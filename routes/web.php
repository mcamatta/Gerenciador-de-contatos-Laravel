<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacts', [ContactController::class, 'index'])
    ->name('contacts.index');
Route::resource('contacts', ContactController::class)
    ->except(['index'])->middleware('auth');

Route::get('login', [LoginController::class, 'login'])
    ->name('login');
Route::get('logout', [LoginController::class, 'logout'])
    ->name('logout');
Route::post('login', [LoginController::class, 'authenticate']);