<style type="text/css">

  form{
    font-size: large;
    background: #000000;
    max-width: 1300px;
    margin: 0 auto;
    padding: 0 50px 10px 10px;
    }
   
    label{
    color:#1E90FF;
    }
    .formcad{
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
    <label for="nomefornecedor" class="form-label">Nome</label>
    <input type="text" class="form-control" id="nomefornecedor" name="nomeForn" required>
  </div>

  <div class="mb-3">
    <label for="emailfornecedor" class="form-label">Email</label>
    <input type="email" class="form-control" id="emailfornecedor" name="emailForn" aria-describedby="emailHelp" required>    
  </div>

  <div class="mb-3">
    <label for="fonefornecedor" class="form-label">Fone</label>
    <input type="text" class="form-control" id="fonefornecedor" name="foneForn" required>
  </div>

  <button type="submit" class="btn btn-success">Cadastrar</button>
</form>
</div>