<div @click.away="openShow = false" class="w-full max-w-sm sm:max-w-lg bg-white/90 dark:bg-gray-900 rounded-2xl shadow-2xl p-4 sm:p-8 border border-blue-100 dark:border-gray-800 fade-in relative">
    <button @click="openShow = false" class="absolute top-2 sm:top-4 right-2 sm:right-4 text-gray-400 hover:text-gray-700 dark:hover:text-blue-300 transition" title="Fechar">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
    </button>
    <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 dark:text-blue-200 mb-2 tracking-tight text-center">Detalhes do Funcionário</h2>
    <div class="space-y-3 sm:space-y-4 mt-4 sm:mt-6">
        <div>
            <span class="block text-xs text-blue-700 dark:text-blue-300 font-semibold">Nome</span>
            <span class="block text-base sm:text-lg text-gray-800 dark:text-gray-100 font-bold" x-text="funcionarioShow.nome"></span>
        </div>
        <div>
            <span class="block text-xs text-blue-700 dark:text-blue-300 font-semibold">Email</span>
            <span class="block text-base sm:text-lg text-gray-800 dark:text-gray-100 font-bold" x-text="funcionarioShow.email"></span>
        </div>
        <div>
            <span class="block text-xs text-blue-700 dark:text-blue-300 font-semibold">CPF</span>
            <span class="block text-base sm:text-lg text-gray-800 dark:text-gray-100 font-bold" x-text="funcionarioShow.cpf"></span>
        </div>
        <div>
            <span class="block text-xs text-blue-700 dark:text-blue-300 font-semibold">Cargo</span>
            <span class="block text-base sm:text-lg text-gray-800 dark:text-gray-100 font-bold" x-text="funcionarioShow.cargo"></span>
        </div>
        <div>
            <span class="block text-xs text-blue-700 dark:text-blue-300 font-semibold">Data de Admissão</span>
            <span class="block text-base sm:text-lg text-gray-800 dark:text-gray-100 font-bold" x-text="funcionarioShow.dataAdmissao"></span>
        </div>
        <div>
            <span class="block text-xs text-blue-700 dark:text-blue-300 font-semibold">Salário</span>
            <span class="block text-base sm:text-lg text-gray-800 dark:text-gray-100 font-bold" x-text="funcionarioShow.salario"></span>
        </div>
    </div>
    <div class="flex justify-end mt-6 sm:mt-8">
        <button type="button" @click="openShow = false" class="text-blue-600 dark:text-blue-300 font-semibold hover:underline text-sm sm:text-base">Fechar</button>
    </div>
</div> 