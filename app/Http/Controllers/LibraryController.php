<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
    	$books = Book::all();
        return view('library', compact('books'));
    }
}
