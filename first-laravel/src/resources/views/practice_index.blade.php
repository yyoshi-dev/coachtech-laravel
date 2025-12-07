@extends('layouts.practice_parent')

@section('content')
<p>本文です。</p>

<ul>
    @include ('components.practice_items', ['item' => 'include'])
</ul>
<ul>
    @component ('components.practice_items')
    @slot ('item')
    component
    @endslot
    @endcomponent
</ul>
<ul>
    @each ('components.practice_items', ['item1', 'item2'], 'item')
</ul>

@endsection