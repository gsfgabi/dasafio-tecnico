<div @click.away="open = false" class="w-full max-w-sm sm:max-w-lg bg-white/90 dark:bg-gray-900 rounded-2xl shadow-2xl p-4 sm:p-8 border border-blue-100 dark:border-gray-800 fade-in relative">
    <button @click="open = false" class="absolute top-2 sm:top-4 right-2 sm:right-4 text-gray-400 hover:text-blue-700 dark:hover:text-blue-300 transition" title="Fechar">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
    </button>
    <h2 class="text-xl sm:text-2xl font-extrabold text-blue-800 dark:text-blue-200 mb-2 tracking-tight text-center">Cadastrar Funcionário</h2>
    <p class="text-blue-600 dark:text-blue-300 mb-4 sm:mb-6 text-center text-sm sm:text-base">Preencha os dados abaixo para adicionar um novo funcionário.</p>
    <form action="{{ route('funcionarios.store') }}" method="POST" class="space-y-4 sm:space-y-5">
        @csrf
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Nome *</label>
            <x-input name="nome" value="{{ old('nome') }}" required error="$errors->first('nome')" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Email *</label>
            <x-input type="email" name="email" value="{{ old('email') }}" required error="$errors->first('email')" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">CPF *</label>
            <x-input name="cpf" value="{{ old('cpf') }}" maxlength="11" required error="$errors->first('cpf')" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Cargo</label>
            <x-input name="cargo" value="{{ old('cargo') }}" error="$errors->first('cargo')" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Data de Admissão</label>
            <x-input type="date" name="dataAdmissao" value="{{ old('dataAdmissao') }}" error="$errors->first('dataAdmissao')" />
        </div>
        <div>
            <label class="block mb-1 font-semibold text-blue-700 dark:text-blue-300 text-sm">Salário</label>
            <x-input type="number" step="0.01" name="salario" value="{{ old('salario') }}" error="$errors->first('salario')" />
        </div>
        <div class="flex flex-col sm:flex-row justify-between items-center gap-3 sm:gap-0 mt-6 sm:mt-8">
            <button type="button" @click="open = false" class="text-blue-600 dark:text-blue-300 font-semibold hover:underline text-sm sm:text-base">Cancelar</button>
            <button type="submit" class="flex items-center gap-2 bg-gradient-to-r from-blue-600 to-blue-800 text-white font-bold px-6 sm:px-8 py-2 rounded-full shadow-lg hover:scale-105 active:scale-95 transition-transform duration-200 focus:outline-none focus:ring-4 focus:ring-blue-300 text-sm sm:text-base">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                Salvar
            </button>
        </div>
    </form>
</div> 