<?php require_once("conecta.php");

function buscaUsuario($conn, $email, $senha) {
    $senhaMd5 = md5($senha);
    $email = mysqli_real_escape_string($conn, $email);
    $query = "select * from usuarios where email='{$email}' and senha='{$senhaMd5 }'";
    $resultado = mysqli_query($conn, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
