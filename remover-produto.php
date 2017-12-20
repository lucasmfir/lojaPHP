<?php require_once('cabecalho.php');
	  require_once('banco-produto.php');
	  require_once('logica-usuario.php');
?>

<?php
	$id =$_POST["id"];
	removeProduto($conn, $id);
	$_SESSION["success"] = "Removido com sucesso";
	header('Location: produto-lista.php');
	die();
 ?>

 <?php require_once('rodape');
