@extends("layout")
@section("conteudo")
<h1 class="display-3">Carrinho</h1>
@if(isset($cart) && count($cart) > 0)
<table class="table">
    <thead>
        <tr>
            <th></th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Valor</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($cart as $indice => $ing)
        <!-- percorre todos os ing da sessão -->
        <tr>
            <td><img src="{{ asset($ing->foto) }}" height="100"></td>
            <td>{{ $ing -> titulo }}</td>
            <td>{{ $ing -> descricao }}</td>
            <td>R${{ $ing -> valor }}</td>
            <td>                           <!-- exclui pelo indice do ingresso --> 
                <a href="{{ route ('carrinho_excluir', ['indice' => $indice] )}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
<p> Nenhum ingresso no carrinho. </p>
@endif
@endsection