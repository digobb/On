<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends RModel
{
    protected $table = "usuarios"; //tabela que irá visualizar no bd
    protected $fillable = ['login', 'password', 'nome', 'celular', 'dataNascimento'];
}
