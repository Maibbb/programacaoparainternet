<?php
	/* quando definido o atributo action dentro do form,
	* os dados são enviados para um outro arquivo, para 
	* que possam ser tratados
	*/
	$nome = $_POST['nome'];
	$nascimento = $_POST['nascimento'];
	$numero = $_POST['numero'];

	// Exibindo os dados recebidos do formulário
	echo "$nome <br>$nascimento<br>$numero";