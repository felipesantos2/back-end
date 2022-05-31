<h1>Novo Usuario</h1>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3 d-flex justify-content-center">
        <label>nome:</label>
        <input type="text" class="form-control-sm" placeholder="nome" name="text_name">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <label>email:</label>
        <input type="email" class="form-control-sm" placeholder="E-mail" name="text_email">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <label>senha:</label>
        <input type="password" class="form-control-sm" placeholder="Senha" name="t_senha">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <label>data de nascimento:</label>
        <input type="date" class="form-control-sm" placeholder="Data de Nascimento" name="t_data_nasc">
    </div>
    <div class="mb-3 d-flex justify-content-center">
        <input type="submit" class="btn btn-primary" value="Enviar">
    </div>


</form>