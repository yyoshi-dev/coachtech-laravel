<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    // リクエストからのデータ取得
    public function create(Request $request)
    {
        $form = $request->all();
        Author::create($form);
        return redirect('/');
    }
    // 取得データ一覧の表示
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }
}
