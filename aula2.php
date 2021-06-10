<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo de primeira página</title>
</head>
<body>
	<?php
		$minhavariavel = "Bem vindos";

		echo "<h1>" . $minhavariavel . " turma de Programação para Interet II</h1>";

		// Estruturas de decisão: if

		$idade = 21;
		$pagouEntrada = true;
		// || or
		// && and
		if ($idade >= 18 && $pagouEntrada) {
			echo "Pode entrar";
		} else {
			echo "Não pode entrar";
		}

		$numero = 10;

		switch($numero){
			case 1:
				echo "UM";
				break;
			case 2: 
				echo "DOIS";
				break;
			default:
				echo "NUMERO INVALIDO";
		}

		// laço de repetição for

		for ($i=0; $i<10; $i++) {
			echo "$i <br>";
		}

		echo "laço while - pre-validação<br>";
		$status = false;

		$i = 0;
		while ($status){
			echo "$i <br>";

			$i++;

			if ($i == 5)
				$status = false;
		}

		echo "laço do while - pós-validação<br>";

		$status = true;

		$i = 0;
		do {
			echo "$i <br>";

			$i++;

			if ($i == 5)
				$status = false;

		} while ($status == true);
	?>
</body>
</html>