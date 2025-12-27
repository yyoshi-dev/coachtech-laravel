<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    // public function index()
    // {
    //     $todos = Todo::all();
    //     return view('index', compact('todos'));
    // }
    // 教科書 (テーブル利用)とリスト利用の比較版
    public function index(Request $request)
    {
        $todos = Todo::all();
        $viewType = $request->query('view', 'self');
        if ($viewType === 'textbook') {
            return view('index_textbook', compact('todos'));
        }
        return view('index', compact('todos'));
    }

    public function store(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::create($todo);
        return redirect('/')->with('message', 'Todoを作成しました');
    }

    public function update(TodoRequest $request)
    {
        $todo = $request->only(['content']);
        Todo::find($request->id)->update($todo);
        return redirect('/')->with('message', 'Todoを更新しました');
    }

    public function destroy(Request $request)
    {
        Todo::find($request->id)->delete();
        return redirect('/')->with('message', 'Todoを削除しました');
    }
}
