<?php
session_start();
include 'connection.php';

$modo = "";
 if(isset($_POST['modo'])) {
 $modo = $_POST['modo'];
 }

$login2 = "";
  if (isset($_POST['login'])) {
	$login2 = $_POST['login'];
	$_SESSION["login"] = $login2;
 }

$senha2 = "";
  if (isset($_POST['senha'])) {
  	$senha2 = $_POST['senha'];
    $_SESSION["senha"] = $senha2;
 }


if ($modo == 'logar') {
	$sql = "SELECT login, senha FROM infouser WHERE login = '$login2' AND senha = '$senha2'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if ($row) {
		echo "<script> alert('entrou!'); </script>";
		header('Location: perfil.php');
	} else {
		echo "<script> alert('Senha ou Login incorreto!'); </script>";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<div class = geral>
		<div class = divLogin>
			<form method="post" action="loginSistema.php">
				<h1 id = "nomeLogin">Tela De Login</h1><br> 
				<label id = "labelLogin">Login:</label> <input type="text" name="login" placeholder=" digite seu login aqui" required><br><br>
				<label id = "labelSenha">Senha:</label> <input type="password" name ="senha" placeholder=" digite sua senha aqui" required><br><br>
				<input type="hidden" name="modo" value="logar">
				<button type="submit" class="botao">Entrar</button>
			</form>
		</div>
	</div>
</body>
</html>
<style type="text/css">
	.geral {
		position: absolute;
		width: 100%;
		height: 630px;
	}
	.divLogin {
		text-align: center;
		width: 100%;
		height: 50%;
		margin-top: 15%;
		background-color: blue;

	}
	.botao {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 1px solid transparent;
		padding: 8px 15px;
		margin-left: 5%;
		margin-top: 5%;
		}
</style>