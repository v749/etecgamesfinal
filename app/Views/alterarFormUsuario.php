<style type="text/css">
    form {
        font-size: large;
        background: #000000;
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 50px 10px 10px;
    }

    label {
        color:#1E90FF;
    }

    .formcad {
        width: 600px;
        height: 800px;
        margin: auto;
        padding-top: 50px;
        padding-bottom: 30px;
    }
</style>

<div class="formcad">
    <form method="POST">
        <div class="mb-3 col-2">
            <label class="form-label" for="codigousuario">Código</label>
            <input class="form-control text-center" type="text" name="codUsuAlterar" readonly id="codigousuario" value="<?php echo ($usuario->codusu) ?>">
        </div>
        <div class="mb-3 col-8">
            <label class="form-label" for="codigoEmail">Email</label>
            <input class="form-control" type="text" name="emailUsu" id="codigoEmail" value="<?php echo ($usuario->emailUsu) ?>">
        </div>
        <div>
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>
    </form>
</div>