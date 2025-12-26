<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/common.css')}}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">
                Todo
            </a>
        </div>
    </header>

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

    <main>
        @yield('content')
    </main>
</body>

</html>
