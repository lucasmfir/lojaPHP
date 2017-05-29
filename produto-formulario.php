<?php include("cabecalho.php");
	  include("banco-categoria.php");
	  include("conecta.php");
	  $categorias = listaCategorias($conn);
 ?> 

	<h1>Formulário de cadastro:</h1>
	<form action="adiciona-produto.php" method="post">
		<table class="table">
			<tr>
				<td>Produto:</td>
				<td><input type="text" name="nome" class="form-control"/><br/></td>
			</tr>
			<tr>
				<td>Preço:</td>
				<td><input type="number" name="preco" class="form-control"/><br/></td>
			</tr>
			<tr>
				<td>Descrição:</td>
				<td><textarea name="descricao" class="form-control"/></textarea></td>
			</tr>

			<tr>
				<td>Categoria:</td>
				<td>
					<?php foreach($categorias as $categoria) : ?>
					<input name="categoria_id" type="radio" value="<?=$categoria['id']?>"><?=$categoria['nome']?><br/>
					<?php endforeach ?>
				</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Cadastrar" class="btn btn-primary"/></td>
			</tr>			
		</table>
	</form>

<?php include("rodape.php"); ?>