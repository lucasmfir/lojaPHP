<?php include('cabecalho.php');
	  include('conecta.php');
	  include('banco-produto.php');
		include('banco-categoria.php');
		$id = $_GET['id'];
	  $produto = buscaProduto($conn, $id);
		$categorias = listaCategorias($conn);
		$checked = $produto['usado'] ? "checked='checked'" : "";
?>

	<h1>Formulário de alteração:</h1>
	<form action="altera-produto.php" method="post">
		<input type="hidden" name="id" value=<?=$id?>>
		<table class="table">
			<tr>
				<td>Produto:</td>
				<td><input type="text" name="nome" class="form-control" value="<?=$produto['nome']?>"/><br/></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input type="number" name="preco" class="form-control" value="<?=$produto['preco']?>"/><br/></td>
			</tr>
			<tr>
				<td>Descrição:</td>
				<td><textarea name="descricao" class="form-control"/><?=$produto['descricao']?></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="checkbox" name="usado" value="true" <?=$checked?>> Usado</td>
			</tr>

			<tr>
				<td>Categoria:</td>
				<td>
					<select name="categoria_id" class="form-control">
					<?php foreach($categorias as $categoria) :
							$selecionada = ($categoria['id'] == $produto['categoria_id']) ? "selected='selected'" : "";
									?>

						<option value="<?=$categoria['id']?>" <?=$selecionada?>><?=$categoria['nome']?></option>
					<?php endforeach ?>
				</select>
				</td>
			</tr>

			<tr>
				<td></td>

				<td><input type="submit" value="Alterar" class="btn btn-primary"/></td>
			</tr>
		</table>
	</form>


<?php
include('rodape.php');
