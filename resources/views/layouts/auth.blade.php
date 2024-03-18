<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Auth Page</title>
        <link rel="icon" type="image/x-icon" href="images/favicon.png" />
        {{-- {{ config('app.name', 'Laravel') }} --}}
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="/rvms/assets/css/custom.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
        <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('rvms/assets/css/style.css') }}" />
        @livewireStyles
    </head>
    <body  class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased">
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        <script src="{{ asset('rvms/assets/js/custom.js') }}"></script>

        @livewireScripts
    </body>
</html>