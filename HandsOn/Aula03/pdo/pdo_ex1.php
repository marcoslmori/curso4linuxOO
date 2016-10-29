<?php
	require ('mysql.php');

	$pdo = ConnMySQL::conectar();
	
	$exec = $pdo->exec("INSERT INTO usuarios(nome, email, senha) VALUES('Primeiro cadastro2', 'primeiro@email2','12342')");


	var_dump($exec);


