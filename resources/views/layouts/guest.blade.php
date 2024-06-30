<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased bg-blue-100">
    <div class="min-h-screen flex items-center justify-center p-4">
        <div
            class="w-full max-w-4xl h-auto min-h-[400px] max-h-[70vh] bg-blue-100 shadow-lg rounded-lg overflow-hidden">
            <div class="p-4 h-full overflow-y-auto">
                {{ $slot }}
            </div>
        </div>
    </div>
</body>

</html>
