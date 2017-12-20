<?php require_once('cabecalho.php');
	  require_once('banco-produto.php');
		require_once('logica-usuario.php');
	  $produtos = listaProdutos($conn);
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


<?php require_once('rodape.php');
