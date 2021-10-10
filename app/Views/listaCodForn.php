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
    .formcad{
        width: 1100px;
        height: 800px;
        margin:auto ;
        padding-top: 50px;
    padding-bottom: 30px;
    }
</style>

<div class="formcad">
    <form method="Post" class="border border-dark p-3 rounded">
        <div>
            <div class="col-8 mb-3">
                <label class="mb-3" for="codforn">Digite o Código do fornecedor</label>
                <input type="number" name="codForn" id="codforn" class="form-control" placeholder="Exemplo:123">
            </div>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success">Buscar</button>
        </div>
    </form>
    <form method="POST" class="border border-dark p-3 rounded ">

        <table class="table">
            <thead>
                <th>Código</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Fone</th>
                <th>alterar</th>
                <th>Deletar</th>
            </thead>
            <tbody>
</div>

<?php
$codforn = isset($fornecedor->codForn) ? $fornecedor->codForn : "";
$nomeforn = isset($fornecedor->nomeForn) ? $fornecedor->nomeForn : "";
$emailforn = isset($fornecedor->emailForn) ? $fornecedor->emailForn : "";
$foneforn = isset($fornecedor->foneForn) ? $fornecedor->foneForn : "";
?>
<tr>
    <td><?php echo($codforn)?></td>
    <td><?php echo($nomeforn)?></td>
    <td><?php echo($emailforn)?></td>
    <td><?php echo($foneforn)?></td>
    <td>
        <form method="POST">
            <input type="hidden" name="codFornAlterar" value="<?php echo($codforn)?>">
            <button type="submit" class="btn btn-warning">Alterar</button>
        </form>
    </td>
    <td>
        <form method="POST">
            <input type="hidden" name="codFornDel" value="<?php echo($codforn)?>">
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    </td>
</tr>
</tbody>
</table>