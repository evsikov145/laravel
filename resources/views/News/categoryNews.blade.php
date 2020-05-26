@extends('main')

@section('title')
    @parent категорий
@endsection

@section('content')
    <h1>Категории новостей</h1>
    <hr>
    @foreach($category as $item)
        <h2>
            <a href="{{route('news.categoryOne', $item->id)}}">{{$item->title}}</a>
        </h2>
        <hr>
    @endforeach
@endsection
