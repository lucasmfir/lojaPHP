<?php require_once("conecta.php");

	function insereProduto($conn, $nome, $preco, $descricao, $categoria_id, $usado){
		$nome = mysqli_real_escape_string($conn, $nome);
		$query = "insert into produtos (nome, preco, descricao, categoria_id, usado) values ('{$nome}', {$preco}, '{$descricao}', {$categoria_id}, {$usado})";
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

	function buscaProduto($conn, $id){
		$sql = "select * from produtos where id = {$id};";
		$resultado = mysqli_query($conn, $sql);
		return mysqli_fetch_assoc($resultado);
	}

	function alteraProduto($conn, $id, $nome, $preco, $descricao, $categoria_id, $usado){
		$query = "update produtos set nome = '{$nome}', preco = {$preco}, descricao = '{$descricao}', categoria_id = {$categoria_id}, usado = {$usado} where id = {$id}";
		return mysqli_query($conn, $query);
	}

?>
