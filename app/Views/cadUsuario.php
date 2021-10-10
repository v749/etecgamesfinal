<style type="text/css">

  form{
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
<form method="Post">
  
  <div class="mb-3">
    <label for="emailusuario" class="form-label">Email</label>
    <input type="email" class="form-control" id="emailusuario" name="emailusu" aria-describedby="emailHelp" required>    
  </div>

  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senhausu" id="senha" required>
  </div>

  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
</div>