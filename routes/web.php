<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Bookshelf; 
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $data['books'] = Book::all();
        return view('books.index', $data);
    }

    public function create()
    {
        $data['bookshelves'] = Bookshelf::pluck('name', 'id'); 
        return view('books.create', $data);
    }

    public function store(Request $request)
    {
        $request['category_id'] = 1; 
        Book::create($request->all());
        return redirect()->route('book.index'); 
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
        return redirect()->route('book.index'); 
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('book.index'); 
    }
}
