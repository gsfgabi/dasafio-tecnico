<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Funcionario;
use Illuminate\Support\Str;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionarios = Funcionario::all();
        return view('funcionarios.index', compact('funcionarios'));
    }

    public function create()
    {
        return redirect()->route('funcionarios.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:funcionarios,email',
            'cpf' => 'required|string|size:11|unique:funcionarios,cpf',
            'cargo' => 'nullable|string|max:100',
            'dataAdmissao' => 'nullable|date',
            'salario' => 'nullable|numeric',
        ]);
        $data['id'] = (string) Str::uuid();
        Funcionario::create($data);
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário cadastrado com sucesso!');
    }

    public function edit($id)
    {
        return redirect()->route('funcionarios.index');
    }

    public function update(Request $request, $id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $data = $request->validate([
            'nome' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:funcionarios,email,' . $id . ',id',
            'cpf' => 'required|string|size:11|unique:funcionarios,cpf,' . $id . ',id',
            'cargo' => 'nullable|string|max:100',
            'dataAdmissao' => 'nullable|date',
            'salario' => 'nullable|numeric',
        ]);
        $funcionario->update($data);
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $funcionario = Funcionario::findOrFail($id);
        $funcionario->delete();
        return redirect()->route('funcionarios.index')->with('success', 'Funcionário excluído com sucesso!');
    }
}
