@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
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
                    @csrf
                    <input type="text" name="content" value={{$todo['content']}} class="todo__item-input">
                    <button type="submit" class="todo__item-update">更新</button>
                </form>
                <form action="/todos/delete" method="post" class="todo__delete-form">
                    @csrf
                    <button type="submit" class="todo__item-delete">削除</button>
                </form>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

{{-- 教科書の回答 --}}
{{--
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="todo__alert">
    <div class="todo__alert--success">
        Todoを作成しました
    </div>
</div>

<div class="todo__content">
    <form class="create-form" action="/todos" method="post">
        @csrf
        <div class="create-form__item">
            <input class="create-form__item-input" type="text" name="content">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">作成</button>
        </div>
    </form>
    <div class="todo-table">
        <table class="todo-table__inner">
            <tr class="todo-table__row">
                <th class="todo-table__header">Todo</th>
            </tr>
            @foreach ($todos as $todo)
            <tr class="todo-table__row">
                <td class="todo-table__item">
                    <form class="update-form">
                        <div class="update-form__item">
                            <input class="update-form__item-input">{{ $todo['content'] }}</input>
                        </div>
                        <div class="update-form__button">
                            <button class="update-form__button-submit" type="submit">更新</button>
                        </div>
                    </form>
                </td>
                <td class="todo-table__item">
                    <form class="delete-form">
                        <div class="delete-form__button">
                            <button class="delete-form__button-submit" type="submit">削除</button>
                        </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
--}}