@extends('news.layout.app')
@section('content')
    @include('news.partials.messages')
    <div>
        <form method="post" action="{{route('news.update', ['news' => $news])}}">
            @csrf
            @method('PUT')
            <p>Наименование : <input type="text" name="title" value="{{$news->title}}"></p>
            @if($errors->has('title'))
                <div class="alert alert-danger">
                    @foreach($errors->get('title') as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <p>Описание : <input type="text" name="description" value="{{$news->description}}"></p>
            @if($errors->has('description'))
                <div class="alert alert-danger">
                    @foreach($errors->get('description') as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <p>Слаг : <input type="text" name="slug" value="{{$news->slug}}"></p>
            @if($errors->has('slug'))
                <div class="alert alert-danger">
                    @foreach($errors->get('slug') as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <input type="submit" value="OK">
        </form>
    </div>
@stop
