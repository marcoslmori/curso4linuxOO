<?php
	require ('mysql.php');

	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES(?,?,?)";

	$stmt = $pdo->prepare($query);

	$vars = array(
			'Nome Stmt',
			'email stmt',
			'senhastmt');

	$retorno = $stmt->execute($vars);

	var_dump($retorno);