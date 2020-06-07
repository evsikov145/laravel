@extends('news.layout.app')
@section('content')
    <a href="/categories">Перейти к категориям</a>
    @include('news.partials.messages')
    <a href="{{route('news.create')}}">Добавить новость</a>
    <table width="100%">
        <thead>
        <tr>
            <th class="table__td">ID</th>
            <th class="table__td">News</th>
            <th class="table__td">Info</th>

        </tr>
        </thead>
        <tbody>
        @foreach( $news as $news )
            <tr>
                <td class="table__td">{{$news->id}}</td>
                <td class="table__td">{{$news->title}}</td>
                <td class="table__td">{{$news->description}}</td>
                <td class="table__td"><a href="{{route('news.edit', ['news'=> $news])}}">Edit</a>|

            </tr>
        @endforeach
        </tbody>
    </table>


@stop
