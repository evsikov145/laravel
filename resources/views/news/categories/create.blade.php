@extends('news.layout.app')
@section('content')
    <div>
        <form method="post" action="{{route('categories.store')}}">
            @csrf
            <p>Наименование : <input class="form-control" type="text" name="title"></p>
            @if($errors->has('title'))
                <div class="alert alert-danger">
                    @foreach($errors->get('title') as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <p>Слаг : <input class="form-control" type="text" name="slug"></p>
            @if($errors->has('slug'))
                <div class="alert alert-danger">
                    @foreach($errors->get('slug') as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
            <input class="btn btn-dark" type="submit" value="OK">
        </form>
    </div>
@stop
