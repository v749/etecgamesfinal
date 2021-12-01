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
    width: 800px;
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
      <th>Email</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </thead>
    <tbody>
      <?php foreach ($usuarios as $usuario) : ?>
        <tr>
          <td><?php echo ($usuario->codusu) ?> </td>
          <td><?php echo ($usuario->emailUsu) ?></td>
          <td>
            <form method="POST">
              <input type="hidden" name="codUsuAlterar" value="<?php echo($usuario->codusu)?>">
              <button type="submit" class="btn btn-warning">Alterar</button>
            </form>
          </td>
          <td>
            <form method="POST">
              <input type="hidden" name="codUsu" value="<?php echo($usuario->codusu)?>">
              <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
          </td> 
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>