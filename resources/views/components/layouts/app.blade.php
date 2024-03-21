<!DOCTYPE html>
<html data-theme="nord" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        @vite('resources/css/app.css')
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        {{ $slot }}

        @livewireScripts
    </body>
</html>
