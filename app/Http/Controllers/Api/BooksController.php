<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BooksController extends Controller
{
    // GET /api/books
    public function index()
    {
        $books = Books::all();
        return response()->json([
            'success' => true,
            'data' => $books
        ]);
    }

    // POST /api/books
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $book = Books::create($request->only('title', 'author', 'year'));

        return response()->json([
            'success' => true,
            'message' => 'Book created successfully',
            'data'    => $book
        ], 201);
    }

    // GET /api/books/{id}
    public function show($id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $book
        ]);
    }

    // PUT /api/books/{id}
    public function update(Request $request, $id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'title'  => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year'   => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors()
            ], 422);
        }

        $book->update($request->only('title', 'author', 'year'));

        return response()->json([
            'success' => true,
            'message' => 'Book updated successfully',
            'data'    => $book
        ]);
    }

    // DELETE /api/books/{id}
    public function destroy($id)
    {
        $book = Books::find($id);

        if (!$book) {
            return response()->json([
                'success' => false,
                'message' => 'Book not found'
            ], 404);
        }

        $book->delete();

        return response()->json([
            'success' => true,
            'message' => 'Book deleted successfully'
        ]);
    }
}
