<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laravel Coding')</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @livewireStyles
    @stack('styles')
    @vite('resources/js/app.js')
    @vite('resources/css/app.css')
</head>
<body>
    <main>
        {{ $slot }}
    </main>
</body>
    @livewireScripts
    @stack('scripts')
</html>