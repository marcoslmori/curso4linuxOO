<?php
	require ('mysql.php');

	$pdo = ConnMySQL::conectar();

	$retorno = $pdo->query('Select * from usuarios;');

	echo '<pre>';
	print_r($retorno);
	
	echo '<hr />';	
	//trabalhando PDO com retorno de array associativo
	$linha = $retorno->fetch(PDO::FETCH_ASSOC);	
	echo "ID= {$linha['id']} <br />";
	echo "NOME= {$linha['nome']} <br />";
	echo "EMAIL= {$linha['email']} <br />";
	echo "SENHA= {$linha['senha']} <br />";

	echo "<br /><hr /><br />";

	//trabalhando PDO com retorno objeto
	$linhaObj = $retorno->fetch(PDO::FETCH_OBJ);
	echo "ID: {$linhaObj->id} <br />";
	echo "NOME: {$linhaObj->nome} <br />";
	echo "EMAIL: {$linhaObj->email} <br />";
	echo "SENHA: {$linhaObj->senha} <br />";


	// print_r($linha);