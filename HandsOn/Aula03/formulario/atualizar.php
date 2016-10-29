<?php
require_once("../pdo/mysql.php");
$pdo = ConnMySQL::conectar();

print_r($_POST);
$query = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id=:id;";

$stmt = $pdo->prepare($query);

$vars = array(':nome'=>$_POST['nome'], ':email'=>$_POST['email'],':senha'=>$_POST['senha'], 'id'=>$_POST['id']);

foreach($vars as $index => $value) {
	$stmt->BindValue($index, $value);
}

if($stmt->execute()){
	echo "Usuario cadastrado com sucesso";
} else {
	echo "erro ao cadastrar novo usuario";
}
