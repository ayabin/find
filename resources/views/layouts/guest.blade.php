<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        <div id="container">
            <div id="header">
                <a href="/"><x-application-logo /></a>
            </div>
            <main>
                <div class="container">
                    <div class="center-form flex-col">{{ $slot }}</div>
                </div>
            </main>
            @include('layouts.footer')
        </div>
    </body>
</html>
