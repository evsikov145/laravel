@extends('main')

@section('title')
   Админка
@endsection

@section('content')
    <h1>Список новостей</h1>
    @foreach($news as $item)
    <table>
        <tr><th>Название</th><th>Описание</th><th>Редактировать</th><th>Удалить</th></tr>
        <tr><td>
                $item->title
            </td>
            <td>
                $item->info
            </td>
            <td>
                <a href="{{route('admin.editNews', $item->id)}}">Редактировать</a>
            </td>
            <td>
                <a href="{{route('admin.deleteNews', $item->id)}}">Удалить</a>
            </td>
        </tr>
    </table>
    @endforeach
    <a href="{{route('admin.addNews')}}">Добавить новую новость</a>
@endsection
