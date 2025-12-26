<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

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
        $viewType = $request->query('view', 'ul'); // デフォルトは ul
        if ($viewType === 'table') {
            return view('category_textbook', compact('categories'));
        }
        return view('category', compact('categories'));
    }
}
