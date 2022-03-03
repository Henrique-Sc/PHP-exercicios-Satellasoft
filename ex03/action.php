<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Exercício 03</title>

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
	<h3>Resultado exercício 03 - Calculo do fatorial</h3>
	<?php

		$num = $_POST['num'];
		$f = 1;
		for ($c = $num; $c > 0; $c--) {
			$f *= $c;
		}

		echo "Fatorial de $num: $f";

	?>
</body>
</html>