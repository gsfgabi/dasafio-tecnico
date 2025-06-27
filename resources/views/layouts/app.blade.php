<!DOCTYPE html>
<html lang="pt-BR" x-data="{ dark: localStorage.getItem('theme') === 'dark' }" x-init="if(dark){document.documentElement.classList.add('dark')}else{document.documentElement.classList.remove('dark')}" x-effect="localStorage.setItem('theme', dark ? 'dark' : 'light'); if(dark){document.documentElement.classList.add('dark')}else{document.documentElement.classList.remove('dark')}" :class="{ 'dark': dark }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Sistema de Funcionários</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            DEFAULT: '#2563eb',
                            dark: '#1e40af',
                        },
                        gray: {
                            950: '#0a0a0a',
                        }
                    }
                }
            }
        }
    </script>
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100 dark:bg-gray-950 min-h-screen text-gray-800 dark:text-gray-100 transition-colors duration-300">
    <nav class="bg-blue-800 dark:bg-gray-900 p-3 sm:p-4 mb-4 sm:mb-6 shadow">
        <div class="container mx-auto flex items-center justify-between px-4">
            <a href="/" class="text-white font-bold text-base sm:text-lg tracking-wide">Desafio Técnico</a>
            <button @click="dark = !dark" class="flex items-center gap-1 sm:gap-2 px-2 sm:px-3 py-1 rounded-full bg-gray-200 dark:bg-gray-800 text-blue-800 dark:text-gray-100 font-semibold shadow hover:bg-gray-300 dark:hover:bg-gray-700 transition text-xs sm:text-sm">
                <svg x-show="!dark" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m8.66-13.66l-.71.71M4.05 19.95l-.71.71M21 12h-1M4 12H3m16.66 4.95l-.71-.71M4.05 4.05l-.71-.71M16 12a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                <svg x-show="dark" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" /></svg>
                <span class="hidden sm:inline" x-text="dark ?"></span>
                <span class="sm:hidden" x-text="dark ? '☀️' : '🌙'"></span>
            </button>
        </div>
    </nav>
    <main class="px-2 sm:px-4">
        @yield('content')
    </main>
</body>
</html>
