<?php 
session_start();
include 'connection.php';

$loginEdit = $_SESSION["login"];
$senhaEdit = $_SESSION["senha"];
$nomeEdit = $_SESSION["nome"];
$emailEdit = $_SESSION["email"];
$cpfEdit = $_SESSION["cpf"];
$rgEdit = $_SESSION["rg"];
$idadeEdit = $_SESSION["idade"];
$nomeMaeEdit = $_SESSION["nomemae"];
$nomePaiEdit = $_SESSION["nomepai"];
$nascimentoEdit = $_SESSION["nascimento"];



$modoEdit = "";
if (isset ($_POST['modoEdit'])) {
 	$modoEdit = $_POST['modoEdit'];
}

if (isset($_POST['nomeEdit'])) {
	$nome = $_POST['nomeEdit']; 
} else {
	$nome = $nomeEdit;
}

if (isset($_POST['emailEdit'])) {
	$email = $_POST['emailEdit'];
} else {
	$email = $emailEdit;
}

if (isset($_POST['cpfEdit'])) {
	$cpf = $_POST['cpfEdit'];
} else {
	$cpf = $cpfEdit;
}

if (isset($_POST['rgEdit'])) {
	$rg = $_POST['rgEdit'];
} else {
	$rg = $rgEdit;
}

if (isset($_POST['idadeEdit'])) {
	$idade = $_POST['idadeEdit'];
} else {
	$idade = $idadeEdit;
}

if (isset($_POST['nomemaeEdit'])) {
	$nomemae = $_POST['nomemaeEdit'];
} else {
	$nomemae = $nomeMaeEdit;
}

if (isset($_POST['nomepaiEdit'])) {
	$nomepai = $_POST['nomepaiEdit'];
} else {
	$nomepai = $nomePaiEdit;
}

if (isset($_POST['nascimentoEdit'])) {
	$nascimento = $_POST['nascimentoEdit'];
} else {
	$nascimento = $nascimentoEdit;
}

if ($modoEdit == 'editar') {
		$sql = "UPDATE infouser SET nome = '$nome', email = '$email', cpf = '$cpf', rg = '$rg', idade = '$idade', nomemae = '$nomemae', nomepai = '$nomepai', nascimento = '$nascimento' WHERE login = '$loginEdit' AND senha = '$senhaEdit'";
		if ($conn->query($sql)) {
			echo "<script> alert('Alterações realizadas com sucesso!'); </script>";
			header('Location: perfil.php');
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<div class = "divEdit">
				<h1 id = "nomeLogin" align="left">Edição</h1> 
				<h2 id = "fraseEfeito" align="left">Edite suas informações pessoais:</h2>
				<h3 align="left">Observação importante: Caso não deseje alterar a informação, reescreva a ultima atualização.</h3><br>  
				<div class = "formEsq">
					<form method="post" action="editInfo.php">
						<br>
						<label id = "labelNome"><b>Nome:<b></label> <input type="text" id="caixa" name = "nomeEdit" placeholder=" digite seu nome"><br><br>
						<label id = "labelEmail"><b>Email:<b></label> <input type="text" id="caixa" name = "emailEdit" placeholder=" digite seu email"><br><br>
						<label id = "labelCpf"><b>Cpf:<b></label> <input type="text" id="caixa" name = "cpfEdit" placeholder=" digite seu cpf"><br><br>
				</div>
				<div class = "formDir">
						<label id = "labelRg"><b>Rg:<b></label> <input type="text" id="caixa" name = "rgEdit" placeholder=" digite seu rg aqui"><br><br>
						<label id = "labelIdade"><b>Idade:<b></label> <input type="text" id="caixa" name = "idadeEdit" placeholder=" digite sua idade aqui"><br><br>
						<label id = "labelNomeMae"><b>Nome da mãe:<b></label> <input type="text" id="caixa" name = "nomemaeEdit" placeholder=" digite o nome da sua mãe"><br><br>
						<label id = "labelNomePai"><b>Nome do pai:<b></label> <input type="text" id="caixa" name = "nomepaiEdit" placeholder=" digite o nome do seu pai"><br><br>
						<label id = "labelNascimento"><b>Data de nascimento:<b></label> <input type="text" id="caixa" name = "nascimentoEdit" placeholder=" digite sua data de nascimento"><br>
						<input type="hidden" name="modoEdit" value="editar">
						<button type="submit" class="botao">Concluir</button>
					</form>
				</div>
			</div>
</body>
</html>

<style type="text/css">
	.divEdit {
		padding-top: 1%;
		padding-left: 5%;
		text-align: center;
		width: 1290px;
		height: 630px;
		background: linear-gradient(blue, grey);
	}
	.formEsq {
		float: left;
		width: 50%
		height: 630px;
	}
	.formDir {
		float: left;
		width: 50%
		height: 630px;
	}
	.botao {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 1px solid transparent;
		padding: 8px 15px;
		margin-left: 25%;
		margin-top: 8%;
	}
	#caixa {
		border-radius: 4px;
		height: 35px;
		width: 50%;
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