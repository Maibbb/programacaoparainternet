<?php
	$conn = mysqli_connect("localhost", "root", "", "agenda");

	if ($conn) {
		$id = (int)($_GET['id']);
		$sql = "DELETE FROM contatos WHERE id = $id";
		
		if (mysqli_query($conn, $sql) == true) {
			// consulta executada com sucesso
			echo "<script>
				alert('Contato apagado com sucesso!')
				window.location.href = 'retrieve.php';
			</script>";
		} else {
			echo "<br>Erro ao executar a consulta: a consulta SQL gerada foi: " . $sql;
		}
		
	} else {
		die("Falha na conexão: " . mysqli_connect_error() );
	}