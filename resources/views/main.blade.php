<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')Страница @show</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
</head>
<body>
@include('header')
    <section class="layout">
        <section class="content">
            @yield('content')
        </section>
        @include('footer')
    </section>
</body>
</html>
