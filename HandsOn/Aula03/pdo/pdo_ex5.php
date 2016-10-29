<?php
	require ('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";
	$stmt = $pdo->prepare($query);

	$vars = array(
			'email'=>'email tmt4',
			'nome'=>'nomes tmt4',
			'senha'=>'senha tmt4',
			);
			
	$retorno = $stmt->execute($vars);

	var_dump($retorno);