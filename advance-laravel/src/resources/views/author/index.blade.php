@extends('layouts.default')

<style>
    th {
        background-color: #289ADC;
        color: white;
        padding: 5px 40px;
    }

    tr:nth-child(odd) td {
        background-color: #FFFFFF;
    }

    td {
        background-color: #EEEEEE;
        padding: 25px 40px;
        text-align: center;
    }
</style>

@section('title', 'author.index.blade.php')

@section('content')
<table>
    <tr>
        <th>Author</th>
        <th>Book</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->getDetail()}}
        </td>
        <td>
            @if ($item->book != null)
            {{$item->book->getTitle()}}
            @endif
        </td>
    </tr>
    @endforeach
</table>
@endsection