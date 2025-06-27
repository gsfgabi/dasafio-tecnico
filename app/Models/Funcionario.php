<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'nome',
        'email',
        'cpf',
        'cargo',
        'dataAdmissao',
        'salario',
    ];
}
