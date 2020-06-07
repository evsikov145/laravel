@extends('main')

@section('title')
   Админка
@endsection

@section('content')
    <h1>Список новостей</h1>

    <table>
        <tr><th>Название</th><th>Описание</th><th></th><th></th></tr>
        @foreach($news as $item)
        <tr><td>
                {{$item->title}}
            </td>
            <td>
                {{$item->info}}
            </td>
            <td>
                <a href="{{route('admin.editNews', $item->id)}}">Редактировать</a>
            </td>
            <td>
                <a href="{{route('admin.deleteNews', $item->id)}}">Удалить</a>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{route('admin.addNews')}}">Добавить новую новость</a>
@endsection
