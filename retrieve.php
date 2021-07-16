<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exibindo todos os contatos salvos na agenda</title>
</head>
<body>
	<h1>Exibindo todos os contatos salvos na agenda</h1>
	<?php
		$conn = mysqli_connect("localhost", "root", "", "agenda");

		$sql = "SELECT id, nome, email, numero, DATE_FORMAT(nascimento, '%d/%m/%Y') AS nascimento FROM contatos ORDER BY nome ASC";

		$registros = mysqli_query($conn, $sql);

		if (mysqli_num_rows($registros) > 0) {
			// exibindo os registros
			echo "<table><tr><td>Nome</td><td>Número tefônico</td><td>E-mail</td><td>Data de nascimento</td><td>Opções</td></tr>";
			while ($registro = mysqli_fetch_assoc($registros) ){
				echo "<tr><td>$registro[nome]</td><td>$registro[numero]</td><td>$registro[email]</td><td>$registro[nascimento]</td>";
				echo "<td><a href='edit.php?id=$registro[id]'>Editar</a>";
				echo " <a href='delete.php?id=$registro[id]'>Excluir</a> </td>";
				echo "</tr>";
				//http://127.0.0.1/edit.php
			}
			echo "</table>";
		} else {
			echo "Você ainda não tem nenhum contato armazenado na sua agenda<br>";
		}

	?>
</body>
</html>