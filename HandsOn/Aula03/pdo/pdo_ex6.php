<?php
	require ('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)";
	$stmt = $pdo->prepare($query);
	
	$nome = 'Nome stmt5';
	$stmt->bindValue(":nome", $nome);
	$stmt->bindValue(":email", 'email smtp5');
	$stmt->bindValue(":senha", 'senha smtp5');
	

	//or o resultado eh o mesmo
	// $stmt->bindParam(":nome", $nome);

			
	$retorno = $stmt->execute();

	var_dump($retorno);