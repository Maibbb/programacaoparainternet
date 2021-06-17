<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exemplo de primeira página</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend>Cadastro</legend>
			Nome: <input type="text" name="nome"> <br>
			Nascimento: <input type="date" name="nascimento"> <br>
			Número: <input type="tel" name="numero"> <br>
			E-mail: <input type="email" name="email"> <br>
			Cidade: <select name="cidade"> <br>
						<option value="0">Escolha sua cidade</option>
						<option value="Rolante">Rolante</option>
						<option value="Taquara">Taquara</option>
						<option value="Parobé">Parobé</option>
					</select>
				<input type="submit" name="enviar" value="Salvar">
		</fieldset>
	</form>
	<?php
		// testa se a variavel $_POST['enviar'] existe
		// ela só vai existir quando o usuário clicou no botão que faz a submissão do formulário
		if (isset($_POST['enviar']) ){
			echo "Usuário clicou no botão";
			/* Salvando em variaveis as informações recebidas dos atributos do formuláro
			 * $_POST é a forma de receber os dados, de acordo com o method definido no formulário
			 * Dentro de [''] está o name definido dentro da tag <input>
			*/
			$nome = $_POST['nome'];
			$nascimento = $_POST['nascimento'];
			$numero = $_POST['numero'];

			/* Função empty testa se uma variavel é vazio
			* ! é o mesmo que != true
			*/
			
			if (! empty($nome)) {
				echo "$nome <br>";
			} else {
				echo "Preencha o campo nome<br>";
			}

			// testa do tipo da variavel
			//is_array, is_bool, is_int

			/* Explicação adicional - por que a função is_int não funcionou
			 * Por padrão, os dados do formulário são enviados como texto
			 * Seria necessário forçar uma conversão da variavel para o tipo inteiro ->  (int)$numero)
			 * Mas fica o exemplo de como utilizar as funçãoes is_array, is_bool, is_int, is_float e is_string
			*/
			/*if (is_int($numero) ){
				echo "A variavel é do tipo inteiro<br>$numero";
			} else {
				echo "Por favor, preencha apenas caracteres números no número telefônico<br>";
			}*/
			
			// Exibindo os dados recebidos do formulário
			//$nascimento<br>$numero";

			// Testando a o usuário preencheu a cidade
			if ($_POST['cidade'] == 0) 
				echo "Por favor, preencha a cidade<br>";
			else
				echo "Cidade escolhida " . $_POST['cidade'];
		} 

	?>
</body>
</html>