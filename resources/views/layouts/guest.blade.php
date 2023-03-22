<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>eVision</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;1,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <style>
        [x-cloak] {
            display: none;
        }
    </style>
</head>

<body class=" scroll-smooth overscroll-contain overflow-auto  " style="font-family: sans-serif;">
    <div class="min-h-screen flex flex-col justify-center ">
        <header>@include('layouts.header')</header>
        <main class="flex-grow">{{ $slot }}</main>
        <footer class="">
            @include('layouts.footer')
        </footer>
    </div>
</body>

</html>
