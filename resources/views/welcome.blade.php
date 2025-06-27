<!DOCTYPE html>
<html lang="pt-BR">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Sistema de Funcionários</title>
    <script src="https://cdn.tailwindcss.com"></script>
            <style>
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            animation: fadeInUp 1s ease-out forwards;
        }
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: none;
            }
        }
        .shine {
            background: linear-gradient(90deg, #2563eb 0%, #60a5fa 50%, #2563eb 100%);
            background-size: 200% 200%;
            animation: shine 2s linear infinite;
        }
        @keyframes shine {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }
            </style>
    </head>
<body class="bg-gradient-to-br from-blue-50 via-white to-blue-100 min-h-screen flex items-center justify-center">
    <div class="fade-in max-w-xl w-full bg-white/90 rounded-2xl shadow-2xl p-10 flex flex-col items-center border border-blue-100">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" alt="Laravel Logo" class="w-48 mb-6 drop-shadow-lg">
        <h1 class="text-4xl font-extrabold text-blue-800 mb-2 tracking-tight">Desafio Técnico</h1>
        <h2 class="text-xl font-semibold text-blue-600 mb-6">Sistema de Cadastro de Funcionários</h2>
        <p class="text-gray-700 mb-8 text-center leading-relaxed">Bem-vindo! Este sistema foi desenvolvido com <span class="font-bold text-blue-700">Laravel 12</span> e <span class="font-bold text-blue-700">Alpine.js</span> para o desafio técnico da Cyber Solutions.<br>Explore o CRUD completo, interatividade e design responsivo.</p>
        <a href="{{ route('funcionarios.index') }}" class="shine text-white text-lg font-bold px-8 py-3 rounded-full shadow-lg hover:scale-105 transition-transform duration-200 focus:outline-none focus:ring-4 focus:ring-blue-300">Acessar Cadastro de Funcionários</a>
        <div class="mt-10 text-xs text-gray-400">Desenvolvido por Gabriella Freitas &bull; {{ date('Y') }}</div>
        </div>
    </body>
</html>
