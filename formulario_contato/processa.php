<?php
$erroN = $erroE = $erroM = "";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = @$_POST['nome'];
    $email = @$_POST['email'];
    $mensagem  = @$_POST['mensagem'];
} #else {
# echo "<span>Falha no metodo de requisição<span>";}

if (isset($_POST['submit'])) {

    if ($nome == '') {
        // echo '<script>alert("Preencha os campos por favor")</script>';
        // echo "<span>Preencha por favor o campo NOME</span><br>";
        $erroN = "<span>Preencha por favor o campo NOME</span><br>";
    }
    if ($email == '') {
        // echo '<script>alert("preencha os campos por favor")</script>';
        // echo "<span>preencha por favor  o Campo E-MAIL</span><br>";
        $erroE = "<span>Preencha por favor  o Campo E-MAIL</span><br>";
    }
    if ($mensagem == '') {
        // echo '<script>alert("preencha os campos por favor")</script>';
        // echo "<span>preencha por favor a MENSAGEM</span><br>";
        $erroM = "<span>Preencha por favor a MENSAGEM</span><br>";
    }
}


?>