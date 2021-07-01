<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Adicionando novo contato na agenda</title>
</head>
<body>
	<form method="post">
		<fieldset>
			<legend>Adicionando novo contato a agenda telefônica</legend>
			Nome: <input type="text" name="nome" placeholder="Fulando da Silva">
			Número telefône: <input type="text" name="numero" placeholder="(xx)9 91108720">
			E-mail: <input type="email" name="email" placeholder="email@provedor.com">
			Data de nascimento: <input type="date" name="nascimento">
			<input type="submit" value="Enviar" name="enviar">
		</fieldset>
	</form>
	<?php 
		if (isset($_POST['enviar'])) {
			
			$nome = $_POST['nome'];
			$numero = $_POST['numero'];
			$email = $_POST['email'];
			$nascimento = $_POST['nascimento'];

			// se não está a vazio a variavel nome
			if (!empty($nome) && !empty($numero)){
				// inserindo o registro no banco de dados

				// abre a conexão com o banco de dados
				$conn = mysqli_connect("localhost", "root", "", "agenda");

				$sql = "INSERT INTO contatos (nome, numero, email, nascimento) VALUES ('$nome', '$numero', '$email', '$nascimento')";

				// executa a consulta
				if (mysqli_query($conn, $sql) ){
					// consulta executada com sucesso
					// exibindo um poupup javascript para informar o usuario
					echo "<script>alert('Contato adicionado com sucesso!');</script>";
				} else {
					// houve um erro ao executar a consulta
					echo "<br>SQL gerado foi: $sql<br>";
				}

			} else {
				echo "<p>Por favor, preencha o <b>Nome</b> e/ou <b>Número do telefone</b>";
			}
		}
	?>
</body>
</html>