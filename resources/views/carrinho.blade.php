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
        @php $total = 0; @endphp
        @foreach($cart as $indice => $ing)
        <!-- percorre todos os ing da sessão -->
        <tr>
            <td><img src="{{ asset($ing->foto) }}" height="100"></td>
            <td>{{ $ing -> titulo }}</td>
            <td>{{ $ing -> descricao }}</td>
            <td>R${{ $ing -> valor }}</td>
            <td>
                <!-- exclui pelo indice do ingresso -->
                <a href="{{ route ('carrinho_excluir', ['indice' => $indice] )}}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
            </td>
        </tr>
        @php $total += $ing->valor; @endphp
        @endforeach
    </tbody>
    <tfooter>
        <tr>
            <td colspan="5">
                Total: R$ {{ $total }}
            </td>
        </tr>
    </tfooter>
</table>


<form action="{{ route('carrinho_finalizar') }}" method="post">
    @csrf
    <input type="submit" value="Finalizar Compra" class="btn btn-lg btn-success">
</form>


@else
<p> Nenhum ingresso no carrinho. </p>
@endif
@endsection