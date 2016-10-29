<?php
require_once("../pdo/mysql.php");
$pdo = ConnMySQL::conectar();

$query = "SELECT * FROM usuarios;";
$stmt = $pdo->prepare($query);
$stmt->execute();
echo "usuarios Cadastrados: {$stmt->rowCount()} <hr />";

$registros = $stmt->fetchAll(PDO::FETCH_ASSOC); 

echo "<h3>";
foreach($registros as $registro) {
	echo "<b><ID:</b> {$registro['id']} <br />";
	echo "<b><Nome:</b> {$registro['nome']} <br />";
	echo "<b><Email:</b> {$registro['email']} <br />";
	echo "<b><senha:</b> {$registro['senha']} <br />";
	echo "<a class='linkEditar' href='editar.php?id={$registro['id']}'>Editar </a>";
	echo "<hr />";
	echo "</div>";

}

?>
