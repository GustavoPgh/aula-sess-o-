<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bloqueando páginas por sessões</title>
	<?php 

		session_start();

		$_SESSION['NOME'] = $_POST['NOME'];
		$_SESSION['SENHA'] = $_POST['SENHA'];


	 ?>
</head>
<body>

	<b>Funcionário: </b> <?php echo $_SESSION['nome'] ?>, logado com sucesso. <br/>
	<b>Data de conexão: </b> <?php echo date("d/m/v") ?> <br>
	<b>Hora da conexão </b> <?php echo date("h:i:s") ?> <br>

	<a href="sessoes_verifica_sessoes.php">Área de administrador</a>

</body>
</html>