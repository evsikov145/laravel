@extends('main')

@section('title')
    @parent регистрации
@endsection

@section('content')
    <h1>Ты можешь зарегистрироваться, пользователь!</h1>
    <form class="reg-form" action="{{route('auth')}}" method="POST">
        @csrf
        <label for="name">Ваше имя</label>
        <input type="text" id="name" name="name" value="{{old('name')}}">
        <label for="surname">Ваша фамилия</label>
        <input type="text" id="surname" name="surname" value="{{old('surname')}}">
        <label for="email">Ваш email</label>
        <input type="email" id="email" name="email" value="{{old('email')}}">
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection


