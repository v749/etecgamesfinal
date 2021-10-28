<style type="text/css">
    form {
        font-size: large;
        background: #000000;
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 50px 10px 10px;
    }

    th {
        color: #1E90FF;
    }

    label {
        color: #1E90FF;
    }

    td {
        color: #1E90FF;
    }

    .formcad {
        width: 800px;
        height: 800px;
        margin: auto;
        padding-top: 50px;
        padding-bottom: 30px;
    }
</style>



<div class="formcad">

    <h1>Busca por código o funcionário</h1>

    <form method="Post" class="border border-dark p-3 rounded">
        <div>
            <div class="col-8 mb-3">
                <label class="mb-3" for="codfun">Digite o Código do Funcionário</label>
                <input type="number" id="codfun" name="codFun" class="form-control" placeholder="Exemplo:123" required>
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
    </form>

    <?php
    //Selecionar todos os arquivos do método POST && GET
    $request = service('request');

    //Ternário
    $codfun = isset($funcionario->codFun) ? $funcionario->codFun : 0;
    $nomefun = isset($funcionario->nomeFun) ? $funcionario->nomeFun : '';
    $fonefun = isset($funcionario->foneFun) ? $funcionario->foneFun : '';

    if ($codfun) {

    ?>

        <form method="Post">
            <div class="mb-3">
                <label for="codfun" class="form-label">Código Funcionário</label>
                <input type="number" class="form-control" id="codfun" value="<?= $codfun ?>" name="codFunAlterar" readonly aria-describedby="Exemplo: 123">
            </div>

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" value="<?= $nomefun ?>" name="nomeFun" aria-describedby="nomeHelp" required>
            </div>

            <div class="mb-3">
                <label for="fone" class="form-label">Fone</label>
                <input type="text" class="form-control" id="fone" value="<?= $fonefun ?>" name="foneFun" required>
            </div>

            <button type="submit" class="btn btn-warning">Alterar</button>
        </form>

        <form method="Post">
            <input type="hidden" name="codFunDeletar" value="<?= $codfun ?>">
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>

    <?php
    }
    ?>