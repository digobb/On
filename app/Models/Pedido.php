<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends RModel
{
    protected $table = "pedidos"; //tabela que irá visualizar no bd
    protected $fillable = ['datapedido', 'status', 'usuario_id'];
}

