<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Área Administrativa</title>
</head>
<body>
<header>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light navbar navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" style="color:#836FFF" href="#">
    EtecGames</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" style="color:#836FFF" href="<?php echo base_url('Home')?>">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#836FFF" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Funcionários</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./FuncionarioController/listaCodFuncionario')?>">Cadastro</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./FuncionarioController/buscaPrincipalFuncionario')?>">Pesquisar</a></li>            
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#836FFF" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Jogos</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./JogosController/')?>">Cadastro</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./JogosController/')?>">Pesquisar por Código </a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./JogosController/')?>">Pesquisar por Nome</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#836FFF" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categoria Jogos</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./CategoriaJogosController/inserirCategoriaJogos')?>">Cadastro</a></li>                        
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#836FFF" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Usuários</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./UsuarioController/inserirUsuario')?>">Cadastro</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./UsuarioController/todosUsuarios')?>">Pesquisar todos</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./UsuarioController/listaCodUsuarios')?>">Pesquisar por código</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#836FFF" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Fornecedores</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./FornecedorController/inserirFornecedor')?>">Cadastro</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./FornecedorController/todosFornecedores')?>">Pesquisar por Todos</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./FornecedorController/listaCodFornecedores')?>">Pesquisar por Código</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" style="color:#836FFF" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Clientes</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./ClienteController/')?>">Cadastro</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./ClienteController/')?>">Pesquisar por Código</a></li>
            <li><a class="dropdown-item" style="color:red" href="<?php echo base_url('./ClienteController/')?>">Pesquisar por Nome</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
</div>
</header>

