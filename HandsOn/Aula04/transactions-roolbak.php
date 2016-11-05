<?php
// preparado para fazer roolbak
// para testar veja os ID's do banco
// mais usado para debugar
// gerar log
	require("../Aula03/pdo/mysql.php");

	$pdo = ConnMysql::conectar();
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);;

	$pdo->beginTransaction();
	try{
		for($i=0;$i <= 5; $i++){
			if ($i==5){
				$pdo->exec("fdadfafafdafadf");
			} else {
				$pdo->exec("INSERT INTO usuarios (nome,email,senha) VALUES('Usuario transaction', 'transaction@mail','123456')");		
			}
		}
	}catch(PDOException $e){
		echo $e->getCode();
		echo "<br />";
		echo $e->getMessage();
		$pdo->rollback();
	}

	$pdo->commit();