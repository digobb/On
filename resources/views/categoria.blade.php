@extends("layout")
@section("conteudo")
<h1 class="display-3">Categorias</h1>

@if(isset($listaCategoria) && count($listaCategoria) > 0)
<ul>
    @foreach($listaCategoria as $cat)
    <li>{{ $cat->categoria }}</li>
    @endforeach
</ul>
@endif

@include("_ingressos", ['lista' => $lista]) <!-- layout que contém a lista dos ingressos-->
@endsection