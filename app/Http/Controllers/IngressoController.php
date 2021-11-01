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
        $data["lista"] = $listaIngressos;
        $data["idcategoria"] = $idcategoria;
        $data["listaCategoria"] = $listaCategorias;
        return view("categoria", $data);
    }
}
