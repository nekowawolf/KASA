<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - KASA')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/admin.js'])
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <div class="flex flex-col md:flex-row">
        <div class="md:hidden bg-zinc-900 p-4 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <img src="/img/kasa.png" class="w-8 h-8 rounded-lg" alt="KASA Logo">
                <h1 class="text-lg font-bold">Admin Panel</h1>
            </div>
            <button id="mobile-menu-toggle" class="p-2 rounded hover:bg-zinc-800">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        <aside id="sidebar" class="hidden md:flex w-64 bg-zinc-900 min-h-screen p-4 md:p-6 flex-col fixed md:relative inset-y-0 left-0 z-50">
            <div class="mb-8 hidden md:block">
                <img src="/img/kasa.png" class="w-12 h-12 mb-2 rounded-lg mx-auto" alt="KASA Logo">
                <h1 class="text-xl font-bold text-center">Admin Panel</h1>
            </div>
            
            <nav class="space-y-2 flex-1">
                <a href="{{ route('admin.dashboard') }}" 
                   class="block px-4 py-2 rounded {{ request()->routeIs('admin.dashboard') ? 'bg-red-700' : 'hover:bg-zinc-800' }}">
                    Dashboard
                </a>
                <a href="{{ route('admin.dramas.index') }}" 
                   class="block px-4 py-2 rounded {{ request()->routeIs('admin.dramas.*') ? 'bg-red-700' : 'hover:bg-zinc-800' }}">
                    Manage Dramas
                </a>
                <form method="POST" action="{{ route('admin.logout') }}" class="mt-4">
                    @csrf
                    <button type="submit" class="w-full text-left px-4 py-2 rounded hover:bg-zinc-800 text-red-400">
                        Logout
                    </button>
                </form>
            </nav>
        </aside>

        <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-40 md:hidden"></div>

        <main class="flex-1 p-4 md:p-8 w-full md:w-auto">
            @yield('content')
        </main>
    </div>

    <script>
        const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');

        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                overlay.classList.toggle('hidden');
            });
        }

        if (overlay) {
            overlay.addEventListener('click', function() {
                sidebar.classList.add('hidden');
                overlay.classList.add('hidden');
            });
        }
    </script>

    <script>
        @if(session('success'))
            window.sessionSuccess = @json(session('success'));
        @endif

        @if(session('error'))
            window.sessionError = @json(session('error'));
        @endif
    </script>
</body>
</html>