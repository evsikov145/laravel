@extends('main')

@section('title')
    @parent новостей
@endsection

@section('content')
    <h1>Новости</h1>
    <hr>
    @foreach($news as $item)
        <h2>
            {{$item->title}}
        </h2>
        <div>{{$item->info}}</div>
        @if(!$item->is_private)
            <a href="{{route('news.one', $item->id)}}">
                Подробнее...
            </a>
        @endif
        <hr>
    @endforeach
@endsection
