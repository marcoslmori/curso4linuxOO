<?php
require_once("../pdo/mysql.php");
$pdo = ConnMySQL::conectar();

print_r($_POST);
$query = "INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha);";

$stmt = $pdo->prepare($query);

$vars = array(':nome'=>$_POST['nome'], ':email'=>$_POST['email'],':senha'=>$_POST['senha']);

foreach($vars as $index => $value) {
	$stmt->BindValue($index, $value);
}

if($stmt->execute()){
	echo "Usuario cadastrado com sucesso";
} else {
	echo "erro ao cadastrar novo usuario";
}
