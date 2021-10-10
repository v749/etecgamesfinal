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
            <label class="form-label" for="codigofornecedor">Código:</label>
            <input class="form-control text-center" readonly type="text" name="codFornAlterar" id="codigofornecedor" value="<?php echo($fornecedor->codForn)?>">
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="nomefornecedor">Nome:</label>
            <input class="form-control" type="text" name="nomeForn" id="nomefornecedor" value="<?php echo($fornecedor->nomeForn)?>">
        </div>       
        <div class="mb-3 col-12">
            <label class="form-label" for="emailfornecedor">Email:</label>
            <input class="form-control" type="text" name="emailForn" id="emailfornecedor" value="<?php echo($fornecedor->emailForn)?>">
        </div>
        <div class="mb-3 col-12">
            <label class="form-label" for="fonefornecedor">Fone:</label>
            <input class="form-control" type="text" name="foneForn" id="fonefornecedor" value="<?php echo($fornecedor->foneForn)?>">
        </div>        
        <div class="mb-3">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </div>        
    </form>
</div>