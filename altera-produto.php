<?php include("cabecalho.php");
	  include("conecta.php");
	  include("banco-produto.php");
  $id           = $_POST["id"];   
  $nome  				= $_POST["nome"];
	$preco			  = $_POST["preco"];
	$descricao    = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];
	if(array_key_exists("usado", $_POST)){
		$usado = "true";
	} else {
		$usado = "false";
	}

	if(alteraProduto($conn, $id, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
		<p class="alert-success">Produto <?= $nome;?>, <?= $preco;?> alterado com sucesso!</p>
	<?php	} else {
		$erro = mysqli_error($conn)
	?>
		<p class="text-danger">Produto <?= $nome;?> não alterado. <?= $erro?></p>
<?php 	}
	//mysqli_close($conn) -> fecha conexao, mas já eh fechada automaticamente
	include("rodape.php");
