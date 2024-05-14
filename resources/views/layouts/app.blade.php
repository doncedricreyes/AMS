<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css')
</head>
<body>
    @include('layouts.header')

    <main class="container mt-4">
        @yield('content')
    </main>

    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>