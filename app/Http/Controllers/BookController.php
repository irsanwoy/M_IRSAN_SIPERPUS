<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $data['books'] = Book::all();
        return view('books.index', $data);
    }

    public function create(){
        $data['bookshelf'] = Book::pluck('id','name');
        return view('books.create', $data);
    }

    public function store(Request $request){
        dd($request);
    }


}
