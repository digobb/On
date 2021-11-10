<?php

namespace App\Services;

use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ClienteService
{
    public function salvarUsuario(Usuario $usuario, Endereco $endereco)
    {
        try {

            $verificaEmail = Usuario::where("login", $usuario->login) -> first();
            if ($verificaEmail) {
                return ['status' => 'err', 'message' => 'Este e-mail já foi cadastrado!'];
            }

            DB::beginTransaction(); // verificar funcionamento e documentação sobre https://laravel.com/docs/8.x/database
            $usuario->save();
            $endereco->usuario_id = $usuario->id;
            //throw new \Exception("FORÇA A OCORRER O ERRO");
            $endereco->save();
            DB::commit();

            return ['status' => 'ok', 'message' => 'Usuário cadastrado com sucesso!']; //retorna o status se gravou ou não ok ou erro
        } catch (\Exception $e) { //tratar o erro caso ocorra:
            DB::rollBack(); //cancela a inserção 
            Log::error("Erro", ['file' => 'ClienteService.salvarUsuario', 'message' => $e->getMessage()]);
            
            return ['status' => 'err', 'message' => 'Não foi possível realizar o cadastro!'];
        }
    }
}
