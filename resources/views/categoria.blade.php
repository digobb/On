@extends("layout")
@section("conteudo")
<h1 class="display-3 mb-4">Categorias</h1>

<div class="col-2">
    @if(isset($listaCategoria) && count($listaCategoria) > 0)
    <div class="list-group">
        <a href="{{ route('categoria') }}" class="list-group-item list-group-item-action">Todas</a>
        @foreach($listaCategoria as $cat)
        <a href="{{ route('categoria_id', ['idcategoria'=> $cat->id]) }}" class="list-group-item list-group-item-action @if($cat->id == $idcategoria ) active @endif">{{ $cat->categoria }}</a>
        @endforeach
    </div>
    @endif
</div>


    <!-- layout que contém a lista dos ingressos-->
    @include("_ingressos", ['lista' => $lista])

@endsection