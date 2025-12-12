<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $items = Book::all();
        return view('book.index', ['items' => $items]);
    }

    public function add()
    {
        return view('book.add');
    }

    public function create(Request $request)
    {
        // $this->validate($request, Book::$rules);
        // $form = $request->all();
        // 教科書の記載は上記だが、Laravelバージョンの違いでエラーとなっていた為、修正
        $form = $request->validate(Book::$rules);
        Book::create($form);
        return redirect('/book');
    }
}
