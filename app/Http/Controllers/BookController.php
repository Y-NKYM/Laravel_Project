<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        $user = Auth::user();
        return view('book.index', compact('books','user'));
    }
    
    public function create(){
        
    }
}
