<?php

try {
	$pdo = new PDO('mysql:dbname=tela;charset=utf8mb4;host=localhost', 'root', '');
} catch (PDOException $ex) {
	echo "Erro ao Conectar ao Banco. ".$ex->getMessage();
}

?>