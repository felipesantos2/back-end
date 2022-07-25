<?php
session_start();
require_once "config.php";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Crud</title>
</head>

<body>
    <div class="container">
        <?php include_once "message.php"; ?>
        <form class="mt-5" method="POST" action="code.php">
            <h1>Cadastrar Usuário</h1>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    Nome:
                    <input type="text" name="name" class="form-control" placeholder="Nome">
                </div>
                <div class="col-lg-6 col-md-6">
                    Curso:
                    <input type="" name="curso" class="form-control" placeholder="Curso">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    Email:
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="col-lg-6 col-md-6">
                    Senha:
                    <input type="password" name="password" class="form-control" placeholder="Senha">
                </div>
                <div class="mt-4">
                    <input type="submit" name="btn-enviar" class="btn btn-primary" value="Enviar">
                </div>
            </div>
        </form>
        <div>
            <div class="table-responsive-sm">
                <table class="table table-bordered table-stripted mt-4">
                    <thead>
                        <th>ID</th>
                        <th>NOME</th>
                        <th>SOBRENOME</th>
                        <th>EMAIL</th>
                        <th>SENHA</th>
                        <th>action</th>
                    </thead>

                    <?php
                    $query = "SELECT * FROM alunos";
                    $query_run = mysqli_query($conn, $query);

                    if (mysqli_num_rows($query_run) > 0) {

                        foreach ($query_run as $alunos) {
                            //fim do bloco em outro fechamento
                    ?>
                            <tbody>
                                <td>
                                    <?php echo $alunos['id']; ?>
                                </td>

                                <td>
                                    <?php echo $alunos['nome']; ?>
                                </td>

                                <td>
                                    <?php echo $alunos['curso']; ?>
                                </td>

                                <td>
                                    <?php echo $alunos['email']; ?>
                                </td>
                                <td>
                                    <?php echo $alunos['senha']; ?>
                                </td>
                                <td>
                                    <a class="btn btn-success">view</a>
                                    <a class="btn btn-danger">d</a>
                                </td>
                            </tbody>
                    <?php
                            //fim do bloco 
                        }
                    }
                    ?>
                </table>
             <div>
        </div>
    </div>
</body>

</html>