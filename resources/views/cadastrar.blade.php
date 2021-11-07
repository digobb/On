@extends("layout")
@section("conteudo")
<div class="col-12">
    <h1 class="display-3 mb-4">Cadastre-se</h1>
</div>

<form action="{{ route('cadastrar_cliente') }}" method="post">
    @csrf <!-- token necessário para forms em POST -->
    <div class="row">
        <div class="mb-3 col-5">
            <label class="form-label">Nome completo</label>
            <input type="text" name="nome" class="form-control" id="nome" aria-describedby="Nome">
        </div>
        <div class="mb-3 col-5">
            <label for="exampleInputEmail1" class="form-label">E-mail</label>
            <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Celular</label>
            <input type="text" name="celular" class="form-control" id="numeroCelular" aria-describedby="Numero Celular">
        </div>
        <div class="mb-3 col-3">
            <label class="form-label">Data Nascimento</label>
            <input type="date" name="dataNascimento" class="form-control" id="data_nascimento" aria-describedby="Nome">
        </div>
        <div class="mb-3 col-5">
            <label class="form-label">Endereço</label>
            <input type="text" name="logradouro" class="form-control" id="nome" aria-describedby="Nome">
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">N</label>
            <input type="text" name="numero" class="form-control" id="numero" aria-describedby="N">
        </div>
        <div class="mb-3 col-2">
            <label class="form-label">CEP</label>
            <input type="text" name="cep" class="form-control" id="cep" aria-describedby="CEP">
        </div>
        <div class="mb-3 col-6">
            <label class="form-label">Estado</label>
            <input type="text" name="estado" class="form-control" id="nome" aria-describedby="Nome">
        </div>
        <div class="mb-3 col-5">
            <label class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="nome" aria-describedby="Nome">
        </div>
        <div class="mb-3 col-6">
            <label for="exampleInputPassword1" class="form-label">Senha</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <!-- <a href="">já possuo uma conta.</a> -->
</form>



@endsection