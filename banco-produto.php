<?php 

	function insereProduto($conn, $nome, $preco, $descricao, $categoria_id){
		$query = "insert into produtos (nome, preco, descricao, categoria_id) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id})";
		$resultadoInsercao = mysqli_query($conn, $query);
		return $resultadoInsercao;
	}

	function listaProdutos($conn){
		$produtos = array();
	  	$query = "select p.*, c.nome as categoria_nome from produtos p join categoria c on p.categoria_id = c.id";
	  	$resultadoConsulta = mysqli_query($conn, $query);
	  	
	  	while($produto = mysqli_fetch_assoc($resultadoConsulta)){
	  		array_push($produtos, $produto);
	  	}	

	  	return $produtos;
	}

	function removeProduto($conn, $id){
		$sql = "delete from produtos where id = {$id};";
		return mysqli_query($conn, $sql);
	}

?>