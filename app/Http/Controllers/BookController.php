<?php

namespace App\Http\Controllers;


use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function show($id)
    {   
        $book = Book::findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function create()
    {
        $book = new Book();
        return view('books.create', compact('book'));
    }

    public function store(Request $request){
        $book = new Book();
        $book->fill($request->all());
        if($book->save()){
            return redirect()->route('books.index');
        }else{
            return redirect()->route('books.create');
        }
    }

    public function edit($id)
    {
        $book = Book::findOrFail($id);
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->fill($request->all());
        
        if($book->save()){
            return redirect()->route('books.index');
        }else{
            return redirect()->route('books.edit');
        }
    }

    public function destroy($id){
        Book::destroy($id);
        return redirect()->route('books.index');
    }

}
