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

{{-- todoの内容 --}}
<div class="todo">
    {{-- todo作成パート --}}
    <div class="todo__section-title">
        <h2>新規作成</h2>
    </div>
    <form action="/todos" method="post" class="todo__form">
        @csrf
        <div class="todo__form-item">
            <input type="text" name="content" value="{{old('content')}}"  class="todo__form-item-input">
            <select name="category_id" id="" class="todo__form-category-select">
                <option value="">カテゴリ</option>
            </select>
        </div>
        <div class="todo__form-button">
            <button class="todo__form-submit" type="submit">作成</button>
        </div>
    </form>
    {{-- todo検索パート --}}
    <div class="todo__section-title">
        <h2>Todo検索</h2>
    </div>
    <form action="/todos/search" method="get" class="todo__search">
        <div class="todo__search-item">
            <input type="text" name="keyword" class="todo__search-item-input">
            <select name="category_id" id="" class="todo__search-category-select">
                <option value="">カテゴリ</option>
            </select>
        </div>
        <div class="todo__search-button">
            <button class="todo__search-submit" type="submit">検索</button>
        </div>
    </form>
    {{-- todo一覧表示パート --}}
    <div class="todo__list">
        <div class="todo__list-title">
            <span class="todo__list-title-content">Todo</span>
            <span class="todo__list-title-category">カテゴリ</span>
            <span class="todo__list-title-update"></span>
            <span class="todo__list-title-delete"></span>
        </div>
        <ul class="todo__items">
            @foreach ($todos as $todo)
            <li class="todo__item">
                <form action="/todos/update" method="post" class="todo__update-form">
                    @method('PATCH')
                    @csrf
                    <input type="text" name="content" value="{{$todo->content}}" class="todo__item-input">
                    <input type="hidden" name="id" value="{{$todo->id}}">
                    <span class="todo__item-category">{{ $todo->category->name }}</span> {{-- 後で修正--}}
                    <button type="submit" class="todo__item-update">更新</button>
                </form>
                <form action="/todos/delete" method="post" class="todo__delete-form">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$todo->id}}">
                    <button type="submit" class="todo__item-delete">削除</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
