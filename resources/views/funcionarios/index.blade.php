@extends('layouts.app')

@section('content')
<div x-data="{ search: '', open: {{ session('openModal') ? 'true' : 'false' }}, openEdit: false, openShow: false, funcionarioEdit: {}, funcionarioShow: {} }" class="max-w-7xl mx-auto fade-in px-2 sm:px-0">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 sm:mb-6 gap-4">
        <h1 class="text-2xl sm:text-3xl font-extrabold text-blue-800 tracking-tight">Funcionários</h1>
        <x-button @click="open = true" class="flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold px-4 sm:px-6 py-2 rounded-full shadow-xl border-2 border-blue-700 hover:shadow-2xl active:scale-95 transition-transform duration-200 focus:outline-none focus:ring-4 focus:ring-blue-300 text-sm sm:text-base">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
            <span class="hidden sm:inline">Novo Funcionário</span>
            <span class="sm:hidden">Novo</span>
        </x-button>
    </div>

    @if(session('success'))
        <x-alert type="success">{{ session('success') }}</x-alert>
    @endif

    <div class="bg-white/90 dark:bg-gray-900 rounded-2xl shadow-xl p-3 sm:p-6 border border-blue-100 dark:border-gray-800 relative">
        <!-- Modal de Cadastro -->
        <div x-show="open" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 dark:bg-black/70 p-2 sm:p-4" style="display: none;">
            @include('funcionarios.modal.create')
        </div>
        <!-- Modal de Edição -->
        <div x-show="openEdit" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 dark:bg-black/70 p-2 sm:p-4" style="display: none;">
            @include('funcionarios.modal.edit')
        </div>
        <!-- Modal de Visualização -->
        <div x-show="openShow" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 dark:bg-black/70 p-2 sm:p-4" style="display: none;">
            @include('funcionarios.modal.show')
        </div>
        <!-- Fim dos Modais -->
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 gap-4">
            <input x-model="search" type="text" placeholder="Buscar por nome ou email..." class="border-2 border-blue-200 dark:border-gray-700 focus:border-blue-500 dark:focus:border-blue-400 focus:ring-2 focus:ring-blue-100 dark:focus:ring-blue-900 transition w-full sm:w-80 p-3 sm:p-2 rounded-lg shadow-sm bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-100 text-sm mb-2 sm:mb-0" />
            <span class="text-gray-500 dark:text-gray-300 text-sm">Total: <span class="font-bold">{{ $funcionarios->count() }}</span></span>
        </div>
        <div class="overflow-x-auto rounded-lg -mx-3 sm:mx-0">
            <table class="min-w-full bg-white/90 dark:bg-gray-900 rounded-lg">
                <thead>
                    <tr class="bg-blue-50 dark:bg-gray-800 text-blue-900 dark:text-blue-200">
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left font-semibold text-xs sm:text-sm whitespace-nowrap">Nome</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left font-semibold text-xs sm:text-sm hidden sm:table-cell whitespace-nowrap">Email</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left font-semibold text-xs sm:text-sm hidden md:table-cell whitespace-nowrap">CPF</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left font-semibold text-xs sm:text-sm hidden lg:table-cell whitespace-nowrap">Cargo</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left font-semibold text-xs sm:text-sm hidden lg:table-cell whitespace-nowrap">Admissão</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-left font-semibold text-xs sm:text-sm hidden md:table-cell whitespace-nowrap">Salário</th>
                        <th class="py-2 sm:py-3 px-2 sm:px-4 text-center font-semibold text-xs sm:text-sm whitespace-nowrap">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($funcionarios as $funcionario)
                    <tr x-show="search === '' || '{{ strtolower($funcionario->nome) }}'.includes(search.toLowerCase()) || '{{ strtolower($funcionario->email) }}'.includes(search.toLowerCase())" class="hover:bg-blue-50 dark:hover:bg-gray-800 transition border-b border-blue-900/20 dark:border-gray-700 last:border-b-0 mb-2">
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-xs sm:text-sm">
                            <div class="font-bold text-base sm:text-sm">{{ $funcionario->nome }}</div>
                            <div class="text-gray-500 sm:hidden text-xs">{{ $funcionario->email }}</div>
                        </td>
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-xs sm:text-sm hidden sm:table-cell">{{ $funcionario->email }}</td>
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-xs sm:text-sm hidden md:table-cell">{{ $funcionario->cpf }}</td>
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-xs sm:text-sm hidden lg:table-cell">{{ $funcionario->cargo }}</td>
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-xs sm:text-sm hidden lg:table-cell">{{ $funcionario->dataAdmissao }}</td>
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-xs sm:text-sm hidden md:table-cell">R$ {{ number_format($funcionario->salario, 2, ',', '.') }}</td>
                        <td class="py-2 px-2 sm:px-4 border-b border-gray-200 dark:border-gray-700 text-center">
                            <div class="flex flex-row gap-x-2 sm:flex-row sm:gap-2 justify-center items-center">
                                <x-button type="button"
                                    @click="openEdit = true; funcionarioEdit = { id: '{{ $funcionario->id }}', nome: '{{ $funcionario->nome }}', email: '{{ $funcionario->email }}', cpf: '{{ $funcionario->cpf }}', cargo: '{{ $funcionario->cargo }}', dataAdmissao: '{{ $funcionario->dataAdmissao }}', salario: '{{ $funcionario->salario }}' }"
                                    class="flex items-center justify-center gap-1 bg-gradient-to-r from-yellow-400 to-yellow-600 text-gray-900 dark:text-gray-900 px-2 py-1 sm:px-4 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold shadow-none sm:shadow-lg border-0 sm:border border-yellow-300 hover:scale-105 active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-yellow-300 relative group"
                                    title="Editar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 11l6 6M3 21h6l11-11a2.828 2.828 0 00-4-4L5 17v4z" /></svg>
                                    <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 px-2 py-1 rounded bg-gray-800 text-white text-xs opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity">Editar</span>
                                </x-button>
                                <a href="#" @click.prevent="openShow = true; funcionarioShow = { id: '{{ $funcionario->id }}', nome: '{{ $funcionario->nome }}', email: '{{ $funcionario->email }}', cpf: '{{ $funcionario->cpf }}', cargo: '{{ $funcionario->cargo }}', dataAdmissao: '{{ $funcionario->dataAdmissao }}', salario: 'R$ {{ number_format($funcionario->salario, 2, ',', '.') }}' }" class="flex items-center justify-center gap-1 bg-gradient-to-r from-gray-300 to-gray-500 text-gray-900 dark:text-gray-200 px-2 py-1 sm:px-4 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold shadow-none sm:shadow hover:scale-105 active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-gray-400 relative group" title="Visualizar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                    <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 px-2 py-1 rounded bg-gray-800 text-white text-xs opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity">Visualizar</span>
                                </a>
                                <form action="{{ route('funcionarios.destroy', $funcionario->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <x-button type="submit" class="flex items-center justify-center gap-1 bg-gradient-to-r from-red-500 to-red-700 text-white px-2 py-1 sm:px-4 sm:py-1.5 rounded-full text-xs sm:text-sm font-semibold shadow-none sm:shadow-lg hover:scale-105 active:scale-95 transition-transform duration-150 focus:outline-none focus:ring-2 focus:ring-red-300 relative group" onclick="return confirm('Tem certeza que deseja excluir?')" title="Excluir">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-4 sm:w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5-4h4a2 2 0 012 2v2H7V5a2 2 0 012-2zm0 0V3m0 2v2" /></svg>
                                        <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 px-2 py-1 rounded bg-gray-800 text-white text-xs opacity-0 group-hover:opacity-100 pointer-events-none transition-opacity">Excluir</span>
                                    </x-button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="py-6 text-center text-gray-400 dark:text-gray-500 text-sm">Nenhum funcionário cadastrado.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('funcionarios', () => ({
            open: false,
            openEdit: false,
            openShow: false,
            funcionarioEdit: {},
            funcionarioShow: {},
            search: '',
        }))
    })
</script>
@endsection 