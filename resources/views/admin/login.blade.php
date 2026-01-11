<!DOCTYPE html>
<html>
<head>
    <title>KASA | Admin Login</title>
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-black flex items-center justify-center min-h-screen">

<form method="POST" action="/admin/login" class="bg-zinc-900 p-8 rounded-xl w-80">
    @csrf

    <div class="flex flex-col items-center mb-6">
        <img src="/img/kasa.png" class="w-16 h-16 mb-2 rounded-lg" alt="KASA Logo">
        <h2 class="text-white text-xl font-bold">Admin Login</h2>
    </div>

    @if(session('error'))
        <p class="text-red-500 text-sm mb-3">{{ session('error') }}</p>
    @endif

    <input name="username" placeholder="Username"
        class="w-full mb-3 px-4 py-2 rounded bg-zinc-800 text-white">

    <input name="password" type="password" placeholder="Password"
        class="w-full mb-4 px-4 py-2 rounded bg-zinc-800 text-white">

    <button class="bg-red-700 w-full py-2 rounded text-white font-semibold">
        Login
    </button>
</form>

</body>
</html>