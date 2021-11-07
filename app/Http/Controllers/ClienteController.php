<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;

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
        //$usuario->cpf = $request->input("cpf", ""); forma individual de armazenar os valores para o Usuario
        //$usuario->login = $request->input("login", "");
        $endereco = new Endereco($values);
        

        $usuario->save();
        $endereco->usuario_id = $usuario->id;
        $endereco->save();
        
        
        return redirect()->route('cadastrar'); //envia o cliente para a tela de cadastrar
    }
}
