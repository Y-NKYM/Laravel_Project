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
    
    public function create(Request $request)
    {
        $image = $request->file('image');
        if($request->hasFile('image')){
            //storage < app < public内に画像を保存
            //$pathにはパス："public/画像ファイル名"が入っている。
            $path = \Storage::put('/public', $image);
            //画像ファイル名のみ保存したいので、explode()で名前のみに変換している。
            $path = explode('/', $path);
        } else {
            $path = null;
        }
        
        // バリデーション
        $request-> validate([
            'title' => 'required|max:20',
            'body' => 'required',
        ]);
        
        $book = new Book;
        $book->user_id = Auth::user()->id;
        $book->title = $request->input(["title"]);
        $book->body= $request->input(["body"]);
        $book->image = $path[1];
        $book->save();
        
        return redirect()->route('book.index');
    }
    
    public function show($id){
        $book = Book::find($id);
        $user = Auth::user();
        return view('book.show', compact('book','user'));
    }
    
    public function edit(){
        $books = Book::all();
        $user = Auth::user();
        return view('book.edit', compact('books','user'));
    }
    
    public function update(){
        
    }
    
    public function destroy(){
        
    }
}
