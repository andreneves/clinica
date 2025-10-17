<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/animal', [AnimalController::class, 'index']);

Route::get('/animal/{id}', [AnimalController::class, 'show']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

