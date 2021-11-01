@if(isset($lista))
@foreach($lista as $ingresso)

<div class="col-3 mb-lg-3">
    <div class="card">
        <img src="{{asset ($ingresso->foto)}}" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $ingresso->titulo }}</h5>
            <p class="card-text">{{ $ingresso->descricao }}</p>
            <p class="card-text"><strong>R$</strong> {{ $ingresso->valor }}</p>
            <p class="card-text"><i class="far fa-clock"></i> {{ $ingresso->horaEvento }}</p>
            <p class="card-text"><i class="fas fa-map-marker-alt"></i> {{ $ingresso->local }}</p>
            <a href="#" class="btn btn-danger"><i class="fas fa-shopping-bag"></i> Comprar</a>
        </div>
    </div>
</div>
@endforeach
@endif