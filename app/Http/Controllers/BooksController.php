<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BooksController extends Controller
{
	public function index()
	{
		// return view('books');
	}

    public function add()
    {
    	return view('admin.books.add');
    }

    public function store()
    {
    	$book = new Book;
    	$book->title = request()->title;
    	$book->image = request()->file('image')->store('public/books/images');
    	$book->book = request()->file('book')->store('public/books');
    	$book->save();

    	return back();
    }
}
