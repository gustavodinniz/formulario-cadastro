<!DOCTYPE html>
<html>

	<head>

		<title>Página de Cadastro</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script type="text/javascript" src="js/1.5.2.js"></script>
		<script type="text/javascript" src="js/jquery.maskedinput-1.3.min.js"></script>

	</head>

	<body>

		<div>
			
			<h1>Cadastro de Clientes</h1>
			<form action="dados.php" method="POST">
			Id do Cliente:<br> <input type="text" name="id" placeholder="Digite o id do cliente"><br>
			Nome: <br><input type="text" name="nome" placeholder="Digite o nome completo"><br>
			Email:<br> <input type="email" name="email" placeholder="Digite o email"><br>
			Telefone: <br><input type="text" name="telefone" placeholder="Digite o telefone" id="tel"><br>
			Senha:<br> <input type="text" name="senha" placeholder="Digite uma senha"><br>
			Data Nascimento:<br> <input type="text" name="dataNascimento" placeholder="Digite a data de nascimento" id="dataN"><br>
			<input type="submit" value="Cadastrar">

			<script>
				jQuery(function($){
					$("#tel").mask("(99)99999-9999");
					$("#dataN").mask("99/99/9999");
				});
			</script>
			</form>

		</div>
	</body>
</html>