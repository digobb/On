@extends("layout")
@section("conteudo")
<h1 class="display-3">Categorias</h1>

@if(isset($listaCategoria) && count($listaCategoria) > 0)
<ul>
    @foreach($listaCategoria as $cat)
    <li>
        <a href="{{route('categoria_id', ['idcategoria'=> $cat->id])}}">{{ $cat->categoria }}</a>
    </li>
    @endforeach
</ul>
@endif

@include("_ingressos", ['lista' => $lista])
<!-- layout que contém a lista dos ingressos-->
@endsection