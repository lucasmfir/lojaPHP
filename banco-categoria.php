<?php require_once("conecta.php");

function listaCategorias($conn){
	$categorias = array();
	$query = "select * from categoria";

	$resultadoConsulta = mysqli_query($conn, $query);
	while($categoria = mysqli_fetch_assoc($resultadoConsulta)){
		array_push($categorias, $categoria);
	}

	return $categorias;

}
