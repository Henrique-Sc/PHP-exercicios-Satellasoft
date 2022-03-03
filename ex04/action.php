<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Exercício 04</title>

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
	<h3>Resultado exercício 04 - Calculadora</h3>

	<?php 

		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operacao = $_POST['operacao'];
		$resultado = 0;

		echo "$num1 $operacao $num2 = ";
		switch ($operacao) {
			case '+':
				echo ($resultado = $num1 + $num2);
				break;

			case '-':
				echo ($resultado = $num1 - $num2);
				break;

			case 'x':
				echo ($resultado = $num1 * $num2);
				break;

			case '/':
				echo ($resultado = $num1 / $num2);
				break;
		}
	?>
</body>
</html>