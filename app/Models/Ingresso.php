<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresso extends RModel
{
    protected $table = "ingressos"; //tabela que irá visualizar no bd
    protected $fillable = ['titulo', 'descricao', 'foto', 'local', 'valor', 'horaEvento', 'dataEvento', 'categoria_id'];
}
