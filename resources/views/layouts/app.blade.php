<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KASA')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/kasa.png') }}">

    <!-- Vite CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/faq.js'])
</head>
<body class="bg-gray-900 text-white min-h-screen">

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
