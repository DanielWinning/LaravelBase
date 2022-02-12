<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config("app.name", "Laravel") }}</title>

        @include("components.global.google-font", ["fontFamily" => "Poppins"])

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset("assets/css/app.css") }}">

    </head>
    <body class="font-primary antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Content -->
            <main id="app">
                {{ $slot }}
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ asset("assets/js/app.js") }}" defer></script>
        {{ $scripts ?? "" }}
    </body>
</html>
