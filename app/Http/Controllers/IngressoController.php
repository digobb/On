<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Ingresso;
use Illuminate\Http\Request;

class IngressoController extends Controller
{
    public function index(Request $request)
    {
        $data = [];

        //buscar todos os ingressos
        $listaIngressos = Ingresso::all();
        $data["lista"] = $listaIngressos; //$data lista recebe array de todos os ing

        return view("home", $data);
    }

    public function categoria($idcategoria = 0, Request $request)
    {
        $data = [];

        $listaCategorias = Categoria::all();
        $queryIngressos = Ingresso::limit(4);

        if ($idcategoria != 0) {
            $queryIngressos->where("categoria_id", $idcategoria);
        }

        $listaIngressos = $queryIngressos->get();
        //lista de todos ingressos
        $data["lista"] = $listaIngressos;
        //manda para view o id da categoria para que possa ser passado o active na class da lista de categorias.
        $data["idcategoria"] = $idcategoria;
        //lista de categorias
        $data["listaCategoria"] = $listaCategorias;
        return view("categoria", $data);
    }

    public function adicionarCarrinho($idIngresso=0, Request $request)
    {
        //buscar pelo id do ingresso
        $ing = Ingresso::find($idIngresso);
        if ($ing) { 
            $carrinho = session('cart', []);//captura a sessão atual e guarda esta.
            array_push($carrinho, $ing); //adiciona um novo ing
            session(['cart' => $carrinho ]); 
        }
        return redirect()->route("home");
    }

    public function verCarrinho(Request $request)
    {
        $carrinho = session('cart', []); //busca o carrinho pela sessão / caso não array vazio
        $data = ['cart' => $carrinho];
        
        return view('carrinho', $data);
    }

    public function excluirCarrinho($indice, Request $request)
    {   
        $carrinho = session('cart', []); //busca o carrinho pela session
        if (isset($carrinho[$indice])) {
            unset($carrinho[$indice]); //remove do carrinho 
        }
        session(['cart' => $carrinho]);
        return redirect()->route('ver_carrinho');
    }
}
