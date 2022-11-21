<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sessão - implementando os formularios - valida </title>

	<?php  
		session_start();
		if ($_SESSION["nome"] != "master"){
			session_destroy();
			header("location: implementando_formulario.php");
		} ?>
		
</head>
<body>

</body>
</html>