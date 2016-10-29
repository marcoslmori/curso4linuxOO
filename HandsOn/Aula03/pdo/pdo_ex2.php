<?php
	require ('psql.php');

	$pdo = ConnPSQL::conectar();
	
	$exec = $pdo->exec("INSERT INTO usuarios(nome, email, senha) VALUES('Primeiro cadastro2', 'primeiro@email2','1234xxx')");


	var_dump($exec);

