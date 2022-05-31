<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Cadastro</title>
</head>

<body>

    <header>
        <nav class="navbar bg-success">
            <!-- navbar-expand-lg -->
            <div class="container">
                <a class="navbar-brand" href="#">Crud</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Usuario</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Listar usuarios</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="conatiner">
        <div class="row">
            <div class="col mt-5">
                <?php
                include "db/config.php";
        
                    switch (@$_REQUEST['page']) {
                        case 'novo':
                            include("novo_usuario.php");
                            break;
                        case 'listar':
                            include("listar_usuario.php");
                            break;
                        case 'salvar';
                            include("salvar_usuario.php");
                            break;
                        default:
                            echo '<h2>Bem-Vindos<h2>';
                            
                    }

                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>
</body>

</html>