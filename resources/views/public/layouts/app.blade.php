<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') Astravio - Dashboard</title>

    <link rel="shortcut icon" href="{{ asset('src/favicon.ico') }}" type="image/x-icon">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- JS Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/index.js') }}" defer></script>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    @include('management.layouts.navbar')

    <div class="flex pt-16 dark:bg-gray-900 justify-center relative w-full max-w-screen-lg">
        <!-- Sidebar -->
        {{-- @include('management.layouts.sidebar') --}}

        <!-- Konten Utama -->
        <div id="main-content" class="relative w-full max-w-screen-lg mx-auto h-full overflow-y-auto dark:bg-gray-900">
            <main class="container bg-gray-50 mx-auto p-6">
                @yield('content')
            </main>
        </div>
    </div>

    <!-- JS Custom -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('api/axios-public.js') }}"></script>

</body>
</html>
