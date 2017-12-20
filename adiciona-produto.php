<?php require_once("cabecalho.php");
	  require_once("banco-produto.php");
	  require_once("logica-usuario.php");

	verificaUsuario();

	$nome  				= $_POST["nome"];
	$preco			  = $_POST["preco"];
	$descricao    = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];
	if(array_key_exists("usado", $_POST)){
		$usado = "true";
	} else {
		$usado = "false";
	}


	if(insereProduto($conn, $nome, $preco, $descricao, $categoria_id, $usado)){ ?>
		<p class="alert-success">Produto <?= $nome;?>, <?= $preco;?> adicionado com sucesso!</p>
	<?php	} else {
		$erro = mysqli_error($conn)
	?>
		<p class="text-danger">Produto <?= $nome;?> não adicionado. <?= $erro?></p>
<?php 	}
	//mysqli_close($conn) -> fecha conexao, mas já eh fechada automaticamente
	require_once("rodape.php");
