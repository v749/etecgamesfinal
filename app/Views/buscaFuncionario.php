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

<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h3>Busca por Código</h3>
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form method="Post" class="border border-dark p-3 rounded">
                    <div>
                        <div class="col-8 mb-3">
                            <label class="mb-3" for="codfun">Digite o código do funcionário</label>
                            <input type="number" id="codfun" name="codFun" class="form-control" placeholder="Exemplo:123" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h3>Busca por Nome</h3>
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <form method="Post" class="border border-dark p-3 rounded">
                    <div>
                        <div class="col-8 mb-3">
                            <label class="mb-3" for="nomefun">Digite o nome do funcionário</label>
                            <input type="text" id="nomefun" name="nomeFuncionario" class="form-control" placeholder="Exemplo: José Victor" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-success">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="formcad">

    <?php    

    //Selecionar todos os arquivos do método POST && GET
    $request = service('request');    

    //Ternário
    $codfun = isset($funcionario->codFun) ? $funcionario->codFun : 0;
    $nomeFun = isset($funcionario->nomeFun) ? $funcionario->nomeFun : '';    

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
                <input type="text" class="form-control" id="nome" value="<?= $nomeFun ?>" name="nomeFun" aria-describedby="nomeHelp" required>
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
    $nomeFuncionario = isset($nomeFuncionario) ? $nomeFuncionario : '';
    if ($nomeFuncionario) {
    ?>

        <table class="table">
            <thead>
                <th>Código</th>
                <th>Email</th>
                <th>Alterar</th>
                <th>Deletar</th>
            </thead>
            <tbody>
</div>

<?php
        $codusu = isset($usuario->codusu) ? $usuario->codusu : "";
        $emailusu = isset($usuario->emailUsu) ? $usuario->emailUsu : "";
?>
<tr>
    <td><?php echo ($codusu) ?></td>
    <td><?php echo ($emailusu) ?></td>
    <td>
        <form method="POST">
            <input type="hidden" name="codUsuAlterar" value="<?php echo ($codusu) ?>">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </form>
    </td>
    <td>
        <form method="POST">
            <input type="hidden" name="codUsuDel" value="<?php echo ($codusu) ?>">
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </td>
</tr>
</tbody>
</table>

<?php
    }
?>