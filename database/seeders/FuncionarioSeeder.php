<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Funcionario;

class FuncionarioSeeder extends Seeder
{
    public function run(): void
    {
        $funcionarios = [
            [
                'id' => (string) Str::uuid(),
                'nome' => 'Ana Silva',
                'email' => 'ana.silva@example.com',
                'cpf' => '12345678901',
                'cargo' => 'Desenvolvedora',
                'dataAdmissao' => '2022-01-10',
                'salario' => 6500.00,
            ],
            [
                'id' => (string) Str::uuid(),
                'nome' => 'Carlos Souza',
                'email' => 'carlos.souza@example.com',
                'cpf' => '23456789012',
                'cargo' => 'Analista',
                'dataAdmissao' => '2021-05-20',
                'salario' => 4800.00,
            ],
            [
                'id' => (string) Str::uuid(),
                'nome' => 'Marina Costa',
                'email' => 'marina.costa@example.com',
                'cpf' => '34567890123',
                'cargo' => 'Gerente',
                'dataAdmissao' => '2020-09-15',
                'salario' => 9000.00,
            ],
        ];

        foreach ($funcionarios as $funcionario) {
            Funcionario::create($funcionario);
        }
    }
} 