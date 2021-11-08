<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function cadastrar(Request $request){
        $data = [];
        
        return view("cadastrar", $data);
    }

    public function cadastrarCliente(Request $request)
    {
        $values = $request->all();//irá pegar todos os dados input vindos do form.
        //dd($values);
        $usuario = new Usuario();//instancia um novo usuario
        $usuario->fill($values); //somente irá armazenar as propriedades definidas no fillable do Usuario
        $endereco = new Endereco($values);
        //$usuario->cpf = $request->input("cpf", ""); forma individual de armazenar os valores para o Usuario
        //$usuario->login = $request->input("login", "");

        //criptografar a senha com padrões do laravel  https://laravel.com/docs/8.x/hashing
        $senha = $request->input("password", "");
        $usuario->password = Hash::make($senha); 
    
        try{
            DB::beginTransaction(); // verificar funcionamento e documentação sobre https://laravel.com/docs/8.x/database
                $usuario->save();
                $endereco->usuario_id = $usuario->id;
                //throw new \Exception("FORÇA A OCORRER O ERRO");
                $endereco->save();
            DB::commit();
        }catch(\Exception $e){//tratar o erro caso ocorra:
            DB::rollBack(); //cancela a inserção 
        }
        return redirect()->route('cadastrar'); //envia o cliente para a tela de cadastrar
    }
}
