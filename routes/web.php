<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', function () {
    return view('welcome');
});

// Animal Routes

Route::get('/animal', [AnimalController::class, 'index'])->name('animal.index');

Route::get('/animal/create', [AnimalController::class, 'create'])->name('animal.create');

Route::post('/animal', [AnimalController::class, 'store'])->name('animal.store');

Route::get('/animal/{id}', [AnimalController::class, 'show'])->name('animal.show');

Route::get('/animal/{id}/edit', [AnimalController::class, 'edit'])->name('animal.edit');

Route::put('/animal/{id}', [AnimalController::class, 'update'])->name('animal.update');

Route::delete('/animal/{id}', [AnimalController::class, 'destroy'])->name('animal.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

