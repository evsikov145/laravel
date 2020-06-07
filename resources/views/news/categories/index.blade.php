@extends('news.layout.app')
@section('content')
    <a href="/news">Перейти к новостям</a>
    @include('news.partials.messages')
    <a href="{{route('categories.create')}}">Добавить категорию</a>
    <table width="100%">
        <thead>
            <tr>
                <th class="table__td">ID</th>
                <th class="table__td">Category</th>
                <th class="table__td"></th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td class="table__td">{{$category->id}}</td>
                <td class="table__td">{{$category->title}}</td>
                <td class="table__td"><a href="{{route('categories.edit', ['category'=> $category])}}">Edit</a>
                    </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @stop
