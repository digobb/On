<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends RModel
{
    protected $table = "enderecos"; //tabela que irá visualizar no bd
    protected $fillable = ['estado', 'cidade', 'numero', 'logradouro', 'cep'];
}
