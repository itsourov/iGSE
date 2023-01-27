<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="data()" :class="{ 'dark': dark }">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $pageTitle }}</title>
    <style>
        [x-cloak] {
            display: none !important;
        }

        html {
            scroll-behavior: smooth;
        }
    </style>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <script src="{{ asset('assets/js/init-alpine.js') }}"></script>

</head>

<body class="bg-white dark:bg-gray-900">

    @include('inc.navbar')
    <main id="app">
        {{ $slot }}
    </main>

    @include('inc.message')
</body>

</html>
