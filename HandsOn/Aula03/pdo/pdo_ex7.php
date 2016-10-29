<?php
	require ('mysql.php');
	$pdo = ConnMySQL::conectar();

	$query = "SELECT * FROM usuarios where id = :id;";
	$stmt = $pdo->prepare($query);
	
	$stmt->bindValue(":id", 3);
	$stmt->execute();
	echo $count = $stmt->rowCount();
	//var_dump($retorno);

	echo '<pre>';
	$linha = $stmt->fetch(PDO::FETCH_ASSOC);
	print_r($linha);