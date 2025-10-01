<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {

        $books = Books::all()->sortByDesc('created_at');
        return view('welcome', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'nullable|integer',
        ]);

        Books::create($validated);

        return redirect()->back()->with('success', 'Buku berhasil ditambahkan.');
    }

    public function show($id)
    {
        $book = Books::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function destroy($id)
    {
        $book = Books::findOrFail($id);
        $book->delete();
        return redirect()->route('index')->with('success', 'Book deleted successfully.');
    }

    public function edit($id)
    {
        $book = Books::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:150',
            'author' => 'required|max:100',
            'year' => 'integer|min:1900|max:2025',
        ]);

        $book = Books::findOrFail($id);
        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'year' => $request->year,
        ]);

        return redirect()->route('books.show', $book->id)->with('success', 'Book updated successfully.');
    }
}
