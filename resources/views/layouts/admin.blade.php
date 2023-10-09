<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Livewire') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Scripts -->
    @livewireStyles
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<div id="app">
    @include('includes.sidebar')
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('includes.header')
        <div class="body flex-grow-1 px-3">
            {{ $content }}
        </div>
        @include('includes.footer')
    </div>
</div>
@livewireScripts
</body>
</html>
