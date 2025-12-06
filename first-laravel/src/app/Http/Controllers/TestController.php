<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index()
    {
        $item = [
            'content' => 'パラメータを渡す',
        ];
        return view('index', $item);
    }
}
