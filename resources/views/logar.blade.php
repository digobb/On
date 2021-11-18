@extends("layout")
@section("conteudo")
<div class="col-12">
    <h2 class="display-3 mb-4">Login</h2>
    <form action="{{ route('logar') }}" method="POST">
        @csrf
        <div class="form-group">
            <div class="mb-3 col-5">
                <label for="exampleInputEmail1" class="form-label">E-mail</label>
                <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 col-6">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <button type="submit" class="btn btn-primary" id="botao_cad_login">Logar</button>
    </form>
</div>
@endsection