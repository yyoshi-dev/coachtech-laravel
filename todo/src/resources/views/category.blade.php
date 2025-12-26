@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/category.css')}}">
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

{{-- categoryの内容 --}}
<div class="category">
    {{-- category作成パート --}}
    <form action="/categories" method="post" class="category__form">
        @csrf
        <div class="category__form-item">
            <input type="text" name="name" value="{{old('name')}}"  class="category__form-item-input">
        </div>
        <div class="category__form-button">
            <button class="category__form-submit" type="submit">作成</button>
        </div>
    </form>
    {{-- category一覧表示パート --}}
    <div class="category__list">
        <div class="category__list-title">
            <span class="category__list-title-content">category</span>
        </div>
        <ul class="category__items">
            {{-- test用 --}}
            @php
            $categories= [
                (object)['id' => 1, 'name'=> 'category1'],
                (object)['id' => 2, 'name'=> 'category2']
            ];
            @endphp
            @foreach ($categories as $category)
            <li class="category__item">
                <form action="/categories/update" method="post" class="category__update-form">
                    @method('PATCH')
                    @csrf
                    <input type="text" name="name" value="{{$category->name}}" class="category__item-input">
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <button type="submit" class="category__item-update">更新</button>
                </form>
                <form action="/categories/delete" method="post" class="category__delete-form">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <button type="submit" class="category__item-delete">削除</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>

@endsection