<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Resultado - Exercício 02</title>

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
	<h3>Resultado exercício 02 - Tabuada</h3>

	<?php
		$num = $_POST['num'];

		echo "-------------------------<br>";
		for ($c = 1; $c < 11 ; $c++) { 
			echo "$num x $c = ". $num * $c. "<br>";
		};
		echo "-------------------------"
	?>
</body>
</html>