<!DOCTYPE html>
<html>
	<head>
 		<title>Formzinho</title>
	</head>
	<body>
			<fieldset>
					<legend>form</legend>
					<form action="atualizar.php" method="POST"	>
						<input id="nome" name="nome" type="text" placeholder="nome" />
						<input id="email" name="email" type="text" placeholder="email" />
						<input id="senha" name="senha" type="password" placeholder="senha" />
						<input id="id" name="id" type="hidden" value="<?php echo $_GET['id']; ?>" />
						<input type="submit" value="enviar" />
						
					</form>
					

			</fieldset>
	</body>
</html>
