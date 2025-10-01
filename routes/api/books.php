<?php

use App\Http\Controllers\Api\BooksController;
use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    // GET /api/books -> ambil semua data
    Route::get('/books', [BooksController::class, 'index']);

    // POST /api/books -> tambah data baru
    Route::post('/books', [BooksController::class, 'store']);

    // GET /api/books/{id} -> detail buku
    Route::get('/books/{id}', [BooksController::class, 'show']);

    // PUT /api/books/{id} -> update buku
    Route::put('/books/{id}', [BooksController::class, 'update']);

    // DELETE /api/books/{id} -> hapus buku
    Route::delete('/books/{id}', [BooksController::class, 'destroy']);
});
