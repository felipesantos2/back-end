<style>
    .form-control {
        width: 40%;
        display: block;
    }
    
</style>

<form action="?page=salvar" method="POST">
    <div class="form-content align-items-center justify-content-center">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nome:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="text_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email:</label>
            <input type="email" class="form-control" id="exampleInputPassword1" name="text_email">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="t_senha">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Senha:</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="t_data_nasc">
        </div>

        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="t_data_nasc">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>