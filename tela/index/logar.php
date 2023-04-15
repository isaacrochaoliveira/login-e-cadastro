<?php

require_once('../conexao.php');

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);

$query = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    if (!isset($_SESSION)) {
        session_start();
    }
    
    $_SESSION['nome'] = $res[0]['nome'];
    $_SESSION['email'] = $res[0]['email'];
    $_SESSION['senha'] = $res[0]['senha'];
}

echo "Logado com Sucesso!";
?>