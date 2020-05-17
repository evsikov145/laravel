@extends('main')

@section('title')
@parent категории
@endsection

@section('content')
<h1>Категории новостей</h1>
<hr>
<h2>
    {{$category['title']}}
</h2>
<hr>
<br>
<a href="{{route('news.category')}}">Вернуться к выбору категорий</a>

@endsection
