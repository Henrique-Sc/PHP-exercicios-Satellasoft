<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Exercício 05</title>

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
	<h3>Resultado exercício 05 - Par ou Ímpar</h3>

	<?php
		$num = $_POST['num'];

		if ($num % 2 == 0) {
			echo "O número $num é PAR!";
		}

		else {
			echo "O número $num é ÍMPAR!";
		}
	?>
</body>
</html>