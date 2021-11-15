<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Endereco;
use Illuminate\Support\Facades\Hash;
use App\Services\ClienteService;

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
        $senha = $request->input('password');
        $usuario->password = Hash::make($senha); 

        //instancia o cliente da class ClienteService e passa os dados para a class
        $clienteService = new ClienteService();
        $result = $clienteService -> salvarUsuario($usuario, $endereco);
        //dd($result); 
        $status = $result["status"];
        $message = $result["message"];
        $request->session()->flash($status, $message); //grava na sessão e após será verificado no layout qual menssagem foi apresentada.

        return redirect()->route('cadastrar'); //envia o cliente para a tela de cadastrar
    }
}
