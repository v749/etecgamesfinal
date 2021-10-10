<style type="text/css">
    form {
        font-size: large;
        background: #000000;
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 50px 10px 10px;
    }

    th {
        color:#1E90FF;
    }

    label {
        color:#1E90FF;
    }

    td {
        color:#1E90FF;
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
    <form method="Post" class="border border-dark p-3 rounded">
        <div>
            <div class="col-8 mb-3">
                <label class="mb-3" for="codusu">Digite o Código do usuário</label>
                <input type="number" name="codUsu" id="codusu" class="form-control" placeholder="Exemplo:123">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
    </form>
    <form method="POST" class="border border-dark p-3 rounded">

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
    <td><?php echo($codusu)?></td>
    <td><?php echo($emailusu)?></td>
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