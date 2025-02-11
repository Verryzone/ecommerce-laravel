<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- Tambahkan CSS Flowbite -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Tambahkan Tailwind CDN jika diperlukan -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <!-- Tambahkan Flowbite JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    @include('components.navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('components.sidebar')

        <!-- Konten Utama -->
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main class="container mx-auto p-4">
                @yield('content')
            </main>
        <div>
    </div>


    <!-- Tambahkan JS -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
