<?php 
session_start();
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>olá</title>
	<meta charset="utf-8">
</head>
<body>
<?php 
	$loginPerfil = $_SESSION["login"];
	$senhaPerfil = $_SESSION["senha"];

	$sql = "SELECT * FROM infouser WHERE login = '$loginPerfil' AND senha = '$senhaPerfil'";	
	$result = $conn->query($sql);	
	$row = $result->fetch_assoc();

?>
	<div class="divTabela">
	<table border="2" id="tabela">
		<tr>
			<td width="100px"><h4 align="center">Id</h4></td>
			<td width="100px"><h4 align="center">Login</h4></td>
			<td width="100px"><h4 align="center">Senha</h4></td>
			<td width="100px"><h4 align="center">Nome</h4></td>
			<td width="150px"><h4 align="center">Email</h4></td>
			<td width="100px"><h4 align="center">Cpf</h4></td>
			<td width="100px"><h4 align="center">Rg</h4></td>
			<td width="100px"><h4 align="center">Nome da Mae</h4></td>
			<td width="100px"><h4 align="center">Nome do Pai</h4></td>
			<td width="100px"><h4 align="center">Nascimento</h4></td>
			<td width="100px"><h3 align="center">Ação</h3></td>
		</tr>
		<?php while ($row) { ?>
		<tr>
			<td height="80px"><?php echo $row['id']; ?></td>
			<td><?php echo $row['login']; ?></td>
			<td><?php echo $row['senha']; ?></td>
			<td><?php echo $row['nome']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['cpf']; ?></td>
			<td><?php echo $row['rg']; ?></td>
			<td><?php echo $row['nomemae']; ?></td>
			<td><?php echo $row['nomepai']; ?></td>
			<td><?php echo $row['nascimento']; ?></td>
			<td><a href="editinfo.php">Editar</a>	
				<a href="editinfo.php">Excluir</a></td>
		</tr>
		<?php  $row = $result->fetch_assoc(); } ?>
	</table>
		<a href="cadastroSistema.php"><button type="submit" class="botao">Sair</button></a>
	</div>

</body>
</html>

<style type="text/css">
	.divTabela {
		width: 100%;
	}
	#tabela {
		text-align: center;
		background-color: grey;
		border-color: black;
		margin-left: 0%;
	}
	.botao {
		display: inline-block;
		font-weight: 400;
		text-align: center;
		white-space: nowrap;
		vertical-align: middle;
		border: 2px solid black;
		padding: 8px 15px;
		margin-left: 5%;
		margin-top: 8%;
	}
</style>