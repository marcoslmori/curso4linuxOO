<?php
	require ('mysql.php');

	$pdo = ConnMySQL::conectar();

	$retorno = $pdo->query('Select * from usuarios;');

	echo '<pre>';
	print_r($retorno);
	
	echo '<hr />';	
	//trabalhando PDO com retorno de array associativo

	while($linhaArr = $retorno->fetch(PDO::FETCH_ASSOC)){
		echo "ID= {$linhaArr['id']} <br />";
		echo "NOME= {$linhaArr['nome']} <br />";
		echo "EMAIL= {$linhaArr['email']} <br />";
		echo "SENHA= {$linhaArr['senha']} <br />";
	}	
	echo "<br /><hr /><br />";

	// print_r($linha);