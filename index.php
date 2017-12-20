<?php require_once('cabecalho.php');
			require_once("logica-usuario.php");
?>
	<h1>Bem vindo!</h1>
<?php	if(isset($_SESSION["danger"])):
?>
		<p class="alert-danger"><?=$_SESSION["danger"]?></p>
<?php
		unset($_SESSION["danger"]);
	endif;
	if(isset($_SESSION["success"])):
?>
	<p class="alert-success"><?=$_SESSION["success"]?></p>
	<?php
		unset($_SESSION["success"]);
	endif;
	if(usuarioEstaLogado()) {
	?>
	<p class="text-success">Você está logado como <?= usuarioLogado() ?></p><a href="logout.php">Logout</a>
	<?php
}else{
?>
	<h2>Login</h2>
      <form action="login.php" method="post">
      <table class="table">
          <tr>
              <td>Email</td>
              <td><input class="form-control" type="email" name="email"></td>
          </tr>
          <tr>
              <td>Senha</td>
              <td><input class="form-control" type="password" name="senha"></td>
          </tr>
          <tr>
              <td><button type="submit" class="btn btn-primary">Login</button></td>
          </tr>
      </table>
      </form>
<?php
}
require_once('rodape.php') ?>
