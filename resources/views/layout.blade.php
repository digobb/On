<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.6.1/font/bootstrap-icons.min.css" integrity="sha512-9a1QYep56cYgIPFq0JYfsh9xRYYmPBxKaD6/ZfVAtplQ6y9ZUSk7GxgC2dmwtxK9T2cGQOxCV6J2Ll51nrvP2w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @yield("scriptjs") <!-- area para adição dos scripts (mascaras etc...)--> 
    
    <title>ProjetoOn</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=" {{ route('home') }}">🍺ProjetoOn </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Ingressos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categoria') }}">Categorias</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('categoria')}}" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown08">
                            <li><a class="dropdown-item" href="">Eletrônica</a></li>
                            <li><a class="dropdown-item" href="">Sertanejo</a></li>
                            <li><a class="dropdown-item" href="">Pagode</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="button-cadastrar-se" href="">Cadastrar-se</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route ('ver_carrinho') }}"><i class="fas fa-shopping-cart"></i></a>
                </li>
            </ul>
        </div>
    </nav>



    <div class="container">
        <div class="row">
            <!-- Aguarda/espera alguém adicionar algum conteúdo nesta área. -->
            @yield("conteudo")
        </div>
    </div>

</body>

</html>
@extends("footer")