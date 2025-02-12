<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Tambahkan CSS Flowbite -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Tambahkan Tailwind CDN jika diperlukan -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

    <!-- Tambahkan Flowbite JS -->
    <script src="{{ asset('js/index.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body class="bg-gray-100">
    @include('layouts.navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('layouts.sidebar')

        <!-- Konten Utama -->
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main class="container mx-auto p-6">
                @yield('content')
            </main>
        <div>
    </div>


    <!-- Tambahkan JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
