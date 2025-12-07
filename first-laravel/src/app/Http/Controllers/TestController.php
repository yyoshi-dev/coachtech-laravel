<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    // 1-7, 1-8 ブラウザに画面を表示しよう:controller編及びroute編
    // public function index($text)
    // public function index($text = "デフォルト")
    // public function index(Request $request)
    // {
    //     $item = [
    //         'content' => 'パラメータを渡す',
    //         // 'param' => $text
    //         'param' => $request->text
    //     ];
    //     return view('index', $item);
    // }

    // 1-9 ブラウザに画面を表示しよう: view編
    public function index()
    {
        $item = [
            'content' => '本文'
        ];
        return view('index', $item);
    }
}
