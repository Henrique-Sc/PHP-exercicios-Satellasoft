<?php 
	// $nome = $_POST['nome'];
	// if ($nome == "Maiara") {
	// 	echo "Uau! Que nome fabuloso :3";
	// }
	// else {
	// 	echo "Eca, nome estranho...";
	// }

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
