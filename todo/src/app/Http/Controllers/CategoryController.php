<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    // public function index()
    // {
    //     $categories = Category::all();
    //     return view('category', compact('categories'));
    // }
    // 教科書 (テーブル利用)とリスト利用の比較版
    public function index(Request $request)
    {
        $categories = Category::all();
        $viewType = $request->query('view', 'self');
        if ($viewType === 'textbook') {
            return view('category_textbook', compact('categories'));
        }
        return view('category', compact('categories'));
    }

    public function store(CategoryRequest $request)
    {
        $category = $request->only(['name']);
        Category::create($category);
        return redirect('/categories')->with('message', 'カテゴリを作成しました');
    }

    public function update(CategoryRequest $request)
    {
        $category = $request->only(['name']);
        Category::find($request->id)->update($category);
        return redirect('/categories')->with('message', 'カテゴリを更新しました');
    }

    public function destroy(Request $request)
    {
        Category::find($request->id)->delete();
        return redirect('/categories')->with('message', 'カテゴリを削除しました');
    }
}
