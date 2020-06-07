@extends('news.layout.app')
@section('content')
    @include('news.partials.messages')
    <div>
        <form method="post" action="{{route('categories.update', ['category' => $category])}}">
            @csrf
            @method('PUT')
            <p>Наименование : <input type="text" name="title" value="{{$category->title}}"></p>
            <p>Слаг : <input type="text" name="slug" value="{{$category->slug}}"></p>
            <input type="submit" value="OK">
        </form>
    </div>
@stop
