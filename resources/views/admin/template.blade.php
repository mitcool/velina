<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    <div class="flex" style="height: 100%;">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-800 text-white p-5 sticky top-0 h-screen">
            <h2 class="text-2xl font-bold mb-6">Панел</h2>
            <ul>
                <li class="mb-3">
                    <a href="{{ route('welcome') }}" class="hover:text-gray-300">Начало</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('dashboard') }}" class="hover:text-gray-300">Админски Панел</a>
                </li>
                <li class="mb-3">
                    <a href="{{ route('edit-gallery') }}" class="hover:text-gray-300">Галерия</a>
                </li>
                <li class="mb-3">
                <a href="{{ route('profile.edit') }}" class="hover:text-gray-300">Настройки</a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            @if (session('success_message'))
                <div x-data="{ show: true }" x-show="show"
                        class="mb-4 flex items-center justify-between p-4 rounded-lg bg-green-100 border border-green-400 text-green-800">
                    <span>{{ session('success_message') }}</span>
                    <button @click="show = false" class="font-bold text-lg">&times;</button>
                </div>
            @endif

            @if (session('error'))
                <div class="mb-4 p-4 rounded-lg bg-red-100 border border-red-400 text-red-800">
                    {{ session('error') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div>
    @yield('scripts')
</body>
</html>