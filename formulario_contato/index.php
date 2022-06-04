<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Contato</title>
    <!-- CSS only -->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="my-5"> Formulário de Contato </h1>
                <form action="processa.php" method="POST">

                    <div class="mb-5">
                        <input type="text" name="nome" placeholder="Digite seu nome:" class="form-control">
                    </div>
                    <div class="mb-5">
                        <input type="email" name="email" placeholder="Digite seu email:" class="form-control">
                    </div>
                    <div class="mb-5">
                        <textarea name="textarea" cols="30" rows="3" name="mensagem" placeholder="Digite mensagem"
                            class="form-control"></textarea>
                    </div>
                    <div class="mb-5">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>