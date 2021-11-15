@extends("layout")

@section("scriptjs")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.js" integrity="sha512-bwanfE29Vxh7VGuxx44U2WkSG9944fjpYRTC3GDUjh0UJ5FOdCQxMJgKWBnlxP5hHKpFJKmawufWEyr5pvwYVA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
   <script>
        $(function(){
            //$("#numeroCelular").mask("000.000.000-00") // 0 = valores numéricos
            $("#numeroCelular").mask("(00) 000000000")
        });
    </script>
@endsection

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
            <input type="text" name="celular" class="form-control" id="numeroCelular" aria-describedby="Numero Celular" placeholder="(54) 999999999">
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
    <button type="submit" class="btn btn-primary" id="botao_cad_login">Cadastrar</button>
    <!-- <a href="">já possuo uma conta.</a> -->
</form>



@endsection