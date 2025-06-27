{{-- Exemplo de estrutura para edição, para ser adaptado quando for implementar o modal de edição --}}
<div @click.away="openEdit = false" class="w-full max-w-sm sm:max-w-lg bg-white/90 dark:bg-gray-900 rounded-2xl shadow-2xl p-4 sm:p-8 border border-blue-100 dark:border-gray-800 fade-in relative">
    <button @click="openEdit = false" class="absolute top-2 sm:top-4 right-2 sm:right-4 text-gray-400 hover:text-blue-700 dark:hover:text-blue-300 transition" title="Fechar">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
    </button>
    <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 dark:text-blue-200 mb-2 tracking-tight text-center">Editar Funcionário</h2>
    <form :action="'/funcionarios/' + funcionarioEdit.id" method="POST" class="space-y-4 sm:space-y-5">
        @csrf
        @method('PUT')
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Nome *</label>
            <x-input name="nome" required x-model="funcionarioEdit.nome" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Email *</label>
            <x-input type="email" name="email" required x-model="funcionarioEdit.email" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">CPF *</label>
            <x-input name="cpf" maxlength="11" required x-model="funcionarioEdit.cpf" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Cargo</label>
            <x-input name="cargo" x-model="funcionarioEdit.cargo" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Data de Admissão</label>
            <x-input type="date" name="dataAdmissao" x-model="funcionarioEdit.dataAdmissao" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Salário</label>
            <x-input type="number" step="0.01" name="salario" x-model="funcionarioEdit.salario" />
        </div>
        <div class="flex flex-col sm:flex-row justify-between items-center gap-3 sm:gap-0 mt-6 sm:mt-8">
            <button type="button" @click="openEdit = false" class="text-blue-600 dark:text-blue-300 font-semibold hover:underline text-sm sm:text-base">Cancelar</button>
            <button type="submit" class="flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold px-6 sm:px-8 py-2 rounded-full shadow-lg hover:scale-105 active:scale-95 transition-transform duration-200 focus:outline-none focus:ring-4 focus:ring-blue-300 text-sm sm:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 11l6 6M3 21h6l11-11a2.828 2.828 0 00-4-4L5 17v4z" /></svg>
                Salvar
            </button>
        </div>
    </form>
</div> 