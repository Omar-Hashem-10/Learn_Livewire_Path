<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Default Layout</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <!-- Page Content -->
            <main>
                {{-- Default Name --}}
                {{ $slot }}
                {{-- When use anthor name You should use <<< ->slot('content') >>> in class file --}}
                {{-- {{ $content }} --}}
                {{-- When use yeild you shold use <<< extends('layouts.default') >>> instead of <<< layout('layouts.default') >>>--}}
                {{-- @yield('content') --}}
                {{-- When want add anthor content use <<< layout('layouts.default', ['title' => 'Omar Hashem']) >>> or <<< layoutData(['title' => 'Omar Hashem']) >>> --}}
                {{-- {{ $title }} --}}
            </main>
        </div>
    </body>
</html>
