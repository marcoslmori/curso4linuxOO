<!DOCTYPE html>
<html>
	<head>
 		<title>Formzinho</title>
	</head>
	<body>
			<fieldset>
					<legend>form</legend>
					<form action="cadastrar.php" method="POST"	>
						<input id="nome" name="nome" type="text" placeholder="nome" />
						<input id="email" name="email" type="text" placeholder="email" />
						<input id="senha" name="senha" type="password" placeholder="senha" />
						<input type="submit" value="enviar" />
						
					</form>
					<a href="listar.php">listar usuarios</a>

			</fieldset>
	</body>
</html>
