<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::prefix('books')->as('books.')->group(function () {
    Route::get('/create', [BooksController::class, 'create'])->name('create');
    Route::post('/store', [BooksController::class, 'store'])->name('store');
    Route::get('/{id}', [BooksController::class, 'show'])->name('show');
    Route::delete('/{id}', [BooksController::class, 'destroy'])->name('destroy');
    Route::get('/{id}/edit', [BooksController::class, 'edit'])->name('edit');
    Route::put('/{id}', [BooksController::class, 'update'])->name('update');
});
