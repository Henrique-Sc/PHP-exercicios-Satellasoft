<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Exercício 08</title>

	<style type="text/css">
		body {
			font-family: arial;
		}


	</style>
</head>
<body>
	<h2>Resultado exercício 08 - Maioridade</h2>

	<?php

	$nome = ucwords($_POST['nome']);
	$idade = $_POST['idade'];
	
	echo "$nome, você é <b>";
	if ($idade < 18) {
		echo "menor de idade!</b>";
	}

	else {
		echo ">maior de idade!</b>";
	}

	?>
</body>
</html>