<style type="text/css">
  table {
    font-size: large;
    background: #000000;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 50px 10px 10px;
  }

  th {
    color:#1E90FF;
  }

  td {
    color:#1E90FF;
  }

  .formcad {
    width: 1000px;
    height: 800px;
    margin: auto;
    padding-top: 50px;
    padding-bottom: 30px;
  }
</style>

<div class="formcad">
  <table class="table">
    <thead>
      <th>Código</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Fone</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </thead>
    <tbody>
      <?php foreach ($fornecedores as $fornecedor) : ?>
        <tr>
          <td><?php echo ($fornecedor->codForn) ?></td>
          <td><?php echo ($fornecedor->nomeForn) ?></td>
          <td><?php echo ($fornecedor->emailForn) ?></td>
          <td><?php echo ($fornecedor->foneForn) ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="codFornAlterar" value="<?php echo($fornecedor->codForn)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="codForn" value="<?php echo($fornecedor->codForn)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>