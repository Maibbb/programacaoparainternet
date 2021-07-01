<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exibindo todos os contatos salvos na agenda</title>
</head>
<body>
	<h1>Exibindo todos os contatos salvos na agenda</h1>
	<?php
		// abre a conexão com o banco de dados
		$conn = mysqli_connect("localhost", "root", "", "agenda");

		$sql = "SELECT id, nome, email, numero, DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento FROM contatos ORDER BY nome ASC";

		// A função mysqli_query retorna um result set em consultas do tipo select 
		$registros = mysqli_query($conn, $sql);

		// testa o numero de linha que a consulta retornou
		if (mysqli_num_rows($registros) > 0) {
			// exibindo os registros
			echo "<table><tr><td>Nome</td><td>Número tefônico</td><td>E-mail</td><td>Data de nascimento</td></tr>";
			while ($registro = mysqli_fetch_assoc($registros) ){
				echo "<tr><td>$registro[nome]</td><td>$registro[numero]</td><td>$registro[email]</td><td>$registro[nascimento]</td></tr>";
			}
			echo "</table>";
		} else {
			echo "Você ainda não tem nenhum contato armazenado na sua agenda<br>";
		}

	?>
</body>
</html>