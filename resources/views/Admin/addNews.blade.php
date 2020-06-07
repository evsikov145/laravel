@extends('main')

@section('content')
    <h1>{{$title}}</h1>
    <form action="{{route($rout, $news->id)}}" method="post">
        @csrf
        <input class="form-control" name="title" placeholder="Название новости" value="{{$news->title}}"><br>
        <textarea class="form-control" name="info" id="" cols="30" rows="10" placeholder="Информация">{{$news->info}}</textarea><br>
        <b>Новость приватна?</b><br>
        <label>Да
            <input name="isPrivate" type="radio" value="1" @if($news->is_private == 1) checked @endif>
        </label>
        <label>Нет
            <input name="isPrivate" type="radio" value="0" @if($news->is_private == 0) checked @endif>
        </label><br>
        <button class="form-control" type="submit">
            @if ($news->id) Изменить @else Добавить @endif
        </button>
    </form>
@endsection

