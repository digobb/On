<?php

namespace App\Services;

use Illuminate\Support\Facades\log;
use App\Models\Usuario;
use App\Models\Pedido;
use App\Models\ItensPedido;
use Illuminate\Support\Facades\DB;

class VendaService
{

    public function finalizarVenda($ings = [], Usuario $user)
    {
        try {
            DB::beginTransaction();
            $dtHoje = new \DateTime();
            $pedido = new Pedido();

            $pedido->datapedido = $dtHoje->format("Y-m-d H:i:s");
            $pedido->status = "PEND";
            $pedido->usuario_id = $user->id;
            $pedido->save();

            foreach ($ings as $ing) {
                $itensPedido = new ItensPedido();

                $itensPedido->quantidade = 1;
                $itensPedido->valor = $ing->valor; //ira pegar o valor do momento da compra
                $itensPedido->dt_item = $dtHoje->format("Y-m-d H:i:s");
                $itensPedido->ingresso_id = $ing->id;
                $itensPedido->pedido_id = $pedido->id;
                $itensPedido->save();
            }
            DB::commit();
            return ['status' => 'ok', 'message' => 'Venda Finalizada com sucesso!'];
        } catch (\Exception $e) {
            Log::error("Ocorreu um erro no serviço de venda", ['message' => $e->getMessage()]);
            return ['status' => 'err', 'message' => 'Venda não pode ser finaliza!'];
        }
    }
}
