<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Atom</title>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="<?= base_url("js/scripts.js") ?>"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >


</head>
<body>

  <?php include("includes/top.php"); ?>

  <div class="container">
    <h1>Editar cadastro</h1>
    <form name="cadastro" id="cadastro" action="<?= base_url("index.php/cadastros/execute/editar") ?>?Id=<?= $Id ?>">
      
      <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" maxlength="100" value="<?= $nome ?>">
      </div>

      <div class="form-group">
        <label for="idade">Idade</label>
        <input type="text" class="form-control" id="idade" name="idade" maxlength="3" value="<?= $idade ?>">
      </div>

      <div class="form-group">
        <label for="endereco">Endereço</label>
        <input type="text" class="form-control" id="endereco" name="endereco" maxlength="150" value="<?= $endereco ?>">
      </div>

      <div class="form-group">
        <label for="cidade">Cidade</label>
        <input type="text" class="form-control" id="cidade" name="cidade" maxlength="100" value="<?= $cidade ?>">
      </div>

      <div class="form-group">
        <label for="uf">UF</label>
        <input type="text" class="form-control" id="uf" name="uf" maxlength="2" value="<?= $uf ?>">
      </div>

      <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" maxlength="16" value="<?= $telefone ?>">
      </div>

      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" class="form-control" id="email" name="email" maxlength="100" value="<?= $email ?>">
      </div>

      <button type="submit" class="btn btn-primary">Editar</button>
      <button type="reset" class="btn btn-danger">Resetar</button>

    </form>
  </div>





</body>
  </html>