<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Auth\AuthServiceProvider;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{
    public function logar(Request $request)
    {
        $data = [];
        if ($request->isMethod("POST")) { // caso ocorra a tentativa de login
            $email = $request->input('login');
            $senha = $request->input('password');

            $credenciais = ['login' => $email, 'password' => $senha];
            //dd($credenciais); //POSSIVEL PROBLEMA ABAIXO NA VERIFICACAO POIS OS DADOS ESTAO CHEGANDO
            if (Auth::attempt($credenciais)) {
                //dd("logado");
                return redirect()->route('home');
            } else {
                //dd("erro");
                $request->session()->flash("err", "Usuário ou Senha incorretos!");
                return redirect()->route('logar');
            }
        }
        return view("logar", $data);
    }

    public function sair(Request $request)  //NAO TESTADO DEVIDO AO ERRO SQLSTATE[42601]: Syntax error: 7 ERROR que ocorre ao tentar verificar sobre a sessao 
    {
        Auth::logout();
        return redirect()->route("home");
    }
}
