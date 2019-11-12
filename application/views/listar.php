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
	<h1>Listar Cadastros</h1>

    <table class="table">	
    <thead>
    <tr>
    	<th>Id</th>
    	<th>Nome</th>
    	<th>Idade</th>
    	<th>Cidade</th>
    	<th>UF</th>
    	<th>Ações</th>
    </tr> 	
</thead>
<tbody>
	<?php 
	foreach($results as $key => $value):
    ?>

		<tr>
			<td><?= $value["Id"] ?></td>
			<td><?= $value["nome"] ?></td>
			<td><?= $value["idade"] ?></td>
			<td><?= $value["cidade"] ?></td>
			<td><?= $value["uf"] ?></td>
			<td>
				<a href="<?= base_url("index.php/cadastros/editar") ?>?Id=<?= $value["Id"] ?>" class="btn btn-info">Editar</a>
				<a href="<?= base_url("index.php/cadastros/execute/excluir") ?>?Id=<?= $value["Id"] ?>" class="btn btn-danger js_ajax_excluir">Excluir</a>
			</td>
		</tr>

      <?php
endforeach;
      ?>

</tbody>
    </table>

</div>

</body>
</html>