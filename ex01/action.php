<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado - Exercício 01</title>

	<style type="text/css">
		body {
			font-family: arial;
		}

		input {
			padding: 5px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<h3>Resultado exercício 01 - Positivo ou negativo</h3>

	<?php

		$num = $_POST['num'];
		
		if ($num < 0) {
			echo "O número $num é negativo!";
		}

		elseif ($num == 0) {
			echo "O número é igual a 0!";
		}

		else {
			echo "O número $num é positivo!";
		}

	?>
</body>
</html>
