<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItensPedido extends RModel
{
    protected $table = "itens_pedidos"; //tabela que irá visualizar no bd
    protected $fillable = ['quantidade', 'valor', 'dt_item', 'ingresso_id', 'pedido_id'];
}

