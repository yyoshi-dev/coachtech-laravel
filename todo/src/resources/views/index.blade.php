@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
{{-- メッセージの表示 --}}
<div class="message">
    @if (session('message'))
    <div class="message__success">
        {{ session('message') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="message__error">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

{{-- todoの内容の表示 --}}
<div class="todo">
    <form action="/todos" method="post" class="todo__form">
        @csrf
        <div class="todo__form-input">
            <input type="text" name="content">
        </div>
        <div class="todo__form-button">
            <button class="todo__form-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo__list">
        <h2 class="todo__list-title">Todo</h2>
        <ul class="todo__items">
            @foreach ($todos as $todo)
            <li class="todo__item">
                <form action="/todos/update" method="post" class="todo__update-form">
                    @method('PATCH')
                    @csrf
                    <input type="text" name="content" value="{{$todo['content']}}" class="todo__item-input">
                    <input type="hidden" name="id" value="{{$todo['id']}}">
                    <button type="submit" class="todo__item-update">更新</button>
                </form>
                <form action="/todos/delete" method="post" class="todo__delete-form">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$todo['id']}}">
                    <button type="submit" class="todo__item-delete">削除</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
