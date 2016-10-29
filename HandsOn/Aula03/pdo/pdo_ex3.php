<?php
	require ('mysql.php');

	$pdo = ConnMySQL::conectar();

	$retorno = $pdo->query('Select * from usuarios;');


	echo '<pre>';
	print_r($retorno);
	echo  '<hr />';

	$linhas = $retorno->fetchAll(PDO::FETCH_OBJ);	
	// mostra o total de registros 
	echo 'row' . $retorno->rowCount(). '<br />';

	// aplicacao para ultimas compras
	// echo 'row' . $retorno->lastInsertID(). '<br />';
	
	foreach ($linhas as $linha) {
		print_r($linha);
		echo  '<hr />';
		echo "ID: {$linha->id} <br />";
		echo "NOME: {$linha->nome} <br />";
		echo "EMAIL: {$linha->email} <br />";
		echo "SENHA: {$linha->senha} <br />";
	}

	

	// $linhas = $retorno->fetchAll(PDO::FETCH_ASSOC);	
	// echo "ID: {$linhas[0]['id']} <br />";
	
