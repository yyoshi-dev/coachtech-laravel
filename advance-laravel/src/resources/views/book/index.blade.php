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

@section('title', 'book.index.balde.php')

@section('content')
<table>
    <tr>
        <th>Books</th>
    </tr>
    @foreach ($items as $item)
    <tr>
        <td>
            {{$item->getTitle()}}
        </td>
    </tr>
    @endforeach
</table>
@endsection