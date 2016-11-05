<?php
	require("../Aula03/pdo/mysql.php");

	$pdo = ConnMysql::conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);;

	$pdo->beginTransaction();
	try{
		$pdo->exec("INSERT INTO usuarios (nome,email,senha) VALUES('Usuario transaction', 'transaction@mail','123456')");
	}catch(PDOException $e){
		$pdo->rollback();
	}

	$pdo->commit();