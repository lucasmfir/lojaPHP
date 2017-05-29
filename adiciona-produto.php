<?php include("cabecalho.php"); 
	  include("conecta.php");
	  include("banco-produto.php");
	$nome  = $_POST["nome"];
	$preco = $_POST["preco"];
	$descricao = $_POST["descricao"];
	$categoria_id = $_POST["categoria_id"];

	if(insereProduto($conn, $nome, $preco, $descricao, $categoria_id)){ ?>
		<p class="alert-success">Produto <?= $nome;?>, <?= $preco;?> adicionado com sucesso!</p>
	<?php	} else { 
		$erro = mysqli_error($conn)
	?>
		<p class="text-danger">Produto <?= $nome;?> não adicionado. <?= $erro?></p>
<?php 	}
	//mysqli_close($conn) -> fecha conexao, mas já eh fechada automaticamente
	include("rodape.php");  