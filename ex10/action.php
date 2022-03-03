<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Exercício 10</title>

    <style type="text/css">
		body {
			font-family: arial;
		}
	</style>
</head>
<body>
    <h3>Resultado exercício 10 - Calendário</h3>
    
    <?php
        $meses = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro','Outubro', 'Novembro', 'Dezembro'];
        $num_mes = $_POST['num_mes'];

        echo "Mês inserido: $num_mes = ".$meses[$num_mes-1]
    ?>
</body>
</html>