@extends("layout")<!-- recebe o layout -->
@section("conteudo")<!-- layout que irá aparecer na estrutura reservada em @yeld-->
    <h1 class="display-3">Ingressos</h1>
    @include("_ingressos", ['lista' => $lista]) <!-- layout que contém a lista dos ingressos-->
@endsection