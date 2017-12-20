<?php require_once('cabecalho.php');
	  require_once('banco-produto.php');
		require_once('banco-categoria.php');
		$id = $_GET['id'];
	  $produto = buscaProduto($conn, $id);
		$categorias = listaCategorias($conn);
		$checked = $produto['usado'] ? "checked='checked'" : "";
?>

	<h1>Formulário de alteração:</h1>
	<form action="altera-produto.php" method="post">
		<input type="hidden" name="id" value=<?=$id?>>

<?php require_once("produto-formulario-base.php"); ?>

				<td><input type="submit" value="Alterar" class="btn btn-primary"/></td>
			</tr>
		</table>
	</form>


<?php
require_once('rodape.php');
