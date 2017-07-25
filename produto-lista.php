<?php include('cabecalho.php');
	  include('conecta.php');
	  include('banco-produto.php');
	  $produtos = listaProdutos($conn);
?>

<?php
	if(array_key_exists("removido", $_GET) && ($_GET['removido']==true)) :
?>
	<p class="text-success">Produto removido</p>
<?php
	endif
 ?>

<table class="table table-striped table-bordered">

<?php
	foreach ($produtos as $produto) : ?>
		<tr>
			<td><?= $produto['nome'] ?></td>
			<td><?= $produto['preco'] ?></td>
			<td><?=substr($produto['descricao'], 0 , 40)?></td>
			<td><?= $produto['categoria_nome'] ?></td>
			<td>
				<form method="post" action='remover-produto.php'>
					<input type="hidden" name="id" value="<?=$produto['id']?>"/>
					<button class="btn btn-danger">Remover</button>
				</form>
			</td>
			<td><a class="btn btn-primary" href="produto-altera-formulario.php?id=<?=$produto['id']?>">alterar</a>
		</tr>
<?php
	endforeach
?>
</table>


<?php include('rodape.php');
