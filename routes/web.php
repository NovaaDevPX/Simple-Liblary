<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [BooksController::class, 'index'])->name('index');

require __DIR__ . '/auth.php';
require __DIR__ . '/pages/books.php';
require __DIR__ . '/api/books.php';
