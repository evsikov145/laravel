@extends('main')

@section('title')
    @parent новости
@endsection

@section('content')
    <h1>Выбранная Вами новость</h1>
    <hr>
        <h2>
            {{$news->title}} {{$news->id}}
        </h2>
        <div>{{$news->info}}</div>
    <hr>
    <br>
    <a href="{{route('news.list')}}">Вернуться к списку новостей</a>
@endsection
