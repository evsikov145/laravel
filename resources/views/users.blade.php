@extends('main')

@section('title')
   Список пользователей
@endsection

@section('content')
   <h1>Список пользователей</h1>
   @foreach($users as $user)
    <div class="users-block">
        <div class="id">{{$user->id}}</div>
        <div class="email">{{$user->email}}</div>
        <div class="desc">{{$user->desc}}</div>
    </div>
    @endforeach
@endsection
