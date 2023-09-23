<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
{{--    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>--}}
</head>
<body class="font-sans antialiased">
<div class="min-h-full flex flex-col">
    @include('layouts.navigation')
    <main class="flex flex-1">
        <div class="container mx-auto">
            @yield('content')
        </div>
    </main>
    @include('layouts.footer')
</div>

</body>
</html>
