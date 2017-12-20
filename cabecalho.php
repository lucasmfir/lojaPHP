<?php
	error_reporting(E_ALL ^ E_NOTICE);
	require_once("mostra-alerta.php");
?>
<html>
<head>
	<title>Loja</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">LOJA</a>
			</div>
			<div>
				<ul  class="nav navbar-nav">
					<li><a href="produto-formulario.php">Cadastrar</a></li>
					<li><a href="produto-lista.php">Produtos</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">
<?php
	mostraAlerta("danger");
	mostraAlerta("success");
?>
