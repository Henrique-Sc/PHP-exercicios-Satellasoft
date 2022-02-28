<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Resultado - Exercício 07</title>

	<style type="text/css">
		body {
			font-family: arial;
		}

	</style>
</head>
<body>
	<h2>Resultado exercício 07 - Média</h2>

	<?php 

		$notas = [$_POST['nota1'], $_POST['nota2'], $_POST['nota3']];
		$media = number_format(array_sum($notas) / count($notas), 2);

		echo "Notas: <br>";
		$c = 1;
		foreach ($notas as $key => $value) {
			echo " - Nota $c: <b>$value</b> <br>";
			$c++;
		}
		echo "<br>Média: <b>$media</b><br>";
		if ($media < 5) {
			echo "Reprovado.";
		}

		elseif ($media >= 5 and $media < 7) {
			echo "Recuperação.";
		}

		else {
			echo "Aprovado.";
		}
	?>
</html>