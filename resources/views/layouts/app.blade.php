<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blog Laravel')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-50 min-h-screen">

    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="max-w-5xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('posts.index') }}" class="text-xl font-bold text-red-600">
                📝 Blog Laravel
            </a>
            <a href="{{ route('posts.create') }}"
               class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
                + Tambah Post
            </a>
        </div>
    </nav>

    <main class="max-w-5xl mx-auto px-6 py-8">
        @if (session('success'))
            <x-alert type="success">{{ session('success') }}</x-alert>
        @endif

        @if (session('error'))
            <x-alert type="error">{{ session('error') }}</x-alert>
        @endif

        @yield('content')
    </main>

    <footer class="mt-16 py-6 bg-slate-800 text-slate-400 text-center text-sm">
        &copy; {{ date('Y') }} Rafael Tamtama Pasaribu — Tugas Rutin 10
    </footer>

    @stack('scripts')
</body>
</html>