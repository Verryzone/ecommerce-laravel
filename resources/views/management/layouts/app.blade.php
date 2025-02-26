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
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
</head>
<body class="bg-gray-100">
    @include('management.layouts.navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('management.layouts.sidebar')

        <!-- Konten Utama -->
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main class="container mx-auto p-6">
                @yield('content')
            </main>
        <div>
    </div>


    <!-- Tambahkan JS -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('api/axios.js') }}"></script>
</body>
</html>
