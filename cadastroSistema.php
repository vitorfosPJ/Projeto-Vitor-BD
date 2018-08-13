<?php
session_start();
include 'connection.php';

$modo = "";
if (isset ($_POST['modo'])) {
	$modo = $_POST['modo'];
}

$_SESSION["login"] = "";
if (isset($_POST['login'])) {
	$_SESSION["login"] = $_POST['login'];
}

$_SESSION["senha"] = "";
if (isset($_POST['senha'])) {
	$_SESSION["senha"] = $_POST['senha'];
}

$_SESSION["nome"] = "";
if (isset($_POST['nome'])) {
	$_SESSION["nome"] = $_POST['nome'];
}

$_SESSION["email"] = "";
if (isset($_POST['email'])) {
	$_SESSION["email"] = $_POST['email'];
}

$_SESSION["cpf"] = "";
if (isset($_POST['cpf'])) {
	$_SESSION["cpf"] = $_POST['cpf'];
}

$_SESSION["rg"] = "";
if (isset($_POST['rg'])) {
	$_SESSION["rg"] = $_POST['rg'];
}

$_SESSION["idade"] = 0;
if (isset($_POST['idade'])) {
	$_SESSION["idade"] = $_POST['idade'];
}

$_SESSION["nomemae"] = "";
if (isset($_POST['nomemae'])) {
	$_SESSION["nomemae"] = $_POST['nomemae'];
}

$_SESSION["nomepai"] = "";
if (isset($_POST['nomepai'])) {
	$_SESSION["nomepai"] = $_POST['nomepai'];
}

$_SESSION["nascimento"] = "";
if (isset($_POST['nascimento'])) {
	$_SESSION["nascimento"] = $_POST['nascimento'];
}

	if ($modo == 'cadastrar') {
		$sql = "INSERT INTO infouser (login, senha, nome, email, cpf, rg, idade, nomemae, nomepai, nascimento) VALUES ('".$_SESSION["login"]."','".$_SESSION["senha"]."','".$_SESSION["nome"]."','".$_SESSION["email"]."','".$_SESSION["cpf"]."','".$_SESSION["rg"]."','".$_SESSION["idade"]."','".$_SESSION["nomemae"]."','".$_SESSION["nomepai"]."','".$_SESSION["nascimento"]."')";
		if ($conn->query($sql)) {
			echo "<script> alert('Você está cadastrado!'); </script>";
			header('Location: loginSistema.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema</title>

</head>
<body>
	<div class = geral>
		<div class = "topo">
			<h2>Caso já possua um cadastro, entre agora com a sua conta!</h2>
			<a href="loginSistema.php"><button type="submit" class="botaoEntrar">Entrar</button></a>
		</div>
		<div class = "divLogin">
			<div class = "divFoto">
				<img id = "foto" src="assets/internetCadastro.png">
			</div>
			<div class = "divCadastro">
				<h1 id = "nomeLogin" align="left">Cadastre-se!</h1> 
				<h3 id = "fraseEfeito" align="left">É gratuito e sempre será!</h3><br> 
				<div class = "formEsq">
					<form method="post" action="cadastroSistema.php">
						<label id = "labelLogin"><b>Login:<b></label> <input type="text" id="caixa" name = "login"placeholder=" digite seu login" required><br><br>
						<label id = "labelSenha"><b>Senha:<b></label> <input type="password" id="caixa" name = "senha" placeholder=" digite sua senha" required><br><br>
						<label id = "labelNome"><b>Nome:<b></label> <input type="text" id="caixa" name = "nome" placeholder=" digite seu nome" required><br><br>
						<label id = "labelEmail"><b>Email:<b></label> <input type="text" id="caixa" name = "email" placeholder=" digite seu email" required><br><br>
						<label id = "labelCpf"><b>Cpf:<b></label> <input type="text" id="caixa" name = "cpf" placeholder=" digite seu cpf" required><br><br>
				</div>
				<div class = "formDir">
						<label id = "labelRg"><b>Rg:<b></label> <input type="text" id="caixa" name = "rg" placeholder=" digite seu rg aqui" required><br><br>
						<label id = "labelIdade"><b>Idade:<b></label> <input type="text" id="caixa" name = "idade" placeholder=" digite sua idade aqui" required><br><br>
						<label id = "labelNomeMae"><b>Nome da mãe:<b></label> <input type="text" id="caixa" name = "nomemae" placeholder=" digite o nome da sua mãe" required><br><br>
						<label id = "labelNomePai"><b>Nome do pai:<b></label> <input type="text" id="caixa" name = "nomepai" placeholder=" digite o nome do seu pai" required><br><br>
						<label id = "labelNascimento"><b>Data de nascimento:<b></label> <input type="text" id="caixa" name = "nascimento" placeholder=" digite sua data de nascimento" required><br>
						<input type="hidden" name="modo" value="cadastrar">
						<button type="submit" class="botaoCadastrar">Cadastrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<style type="text/css">
	.geral {
		position: absolute;
		width: 100%;
		height: 630px;
		padding: 0px;
		
	}
	.divLogin {
		text-align: center;
		width: 100%;
		height: 70%;
		background: linear-gradient(blue, grey);
	}
	.topo {
		width: 100%;	
		height: 70px;
		background-color: blue;
		margin-top: 0px;
		padding-top: 15px;
		padding-left: 20px;
	}
	.divFoto {
		float: left;
		width: 40%;
		height: 630px;
		padding: 4%;
	}
	.divCadastro {
		float: left;
		width: 70%
		height: 630px;
		padding-left: 7%;
		/*padding-top: 1%;*/
	}
	.formEsq {
		float: left;
		width: 50%
		height: 630px;
	}
	.formDir {
		float: right;
		width: 50%
		height: 630px;
	}
	.botaoEntrar {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 2px solid black;
		padding: 8px 15px;
	}
	.botaoCadastrar {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 2px solid black;
		padding: 8px 15px;
		margin-left: 25%;
		margin-top: 8%;
	}
	#caixa {
		border-radius: 4px;
		height: 35px;
		width: 50%;
	}
	#foto {
		width: 100%;
		height: 440px;
		margin-left: 0%;
	}
	#labelCpf {
		margin-left: 15px;
	}
	#labelRg {
		margin-left: 130px;
	}
	#labelIdade {
		margin-left: 110px;
	}
	#labelNomeMae {
		margin-left: 58px;
	}
	#labelNomePai {
		margin-left: 65px;
	}
	#labelNascimento {
		margin-left: 20px;
	}
</style>