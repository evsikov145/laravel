@extends('main')

@section('title')
    @parent новостей
@endsection

@section('content')
    <h1>Новости</h1>
    <hr>
    @foreach($news as $item)
        <h2>
            <a href="{{route('news.one', $item['id'])}}">{{$item['title']}} {{$item['id']}}</a>
        </h2>
        <div>{{$item['info']}}</div>
        <hr>
    @endforeach
@endsection
