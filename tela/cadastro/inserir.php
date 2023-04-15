<?php

require_once('../conexao.php');

$nome = addslashes($_POST['nome']);
$nasc = addslashes(($_POST['nasc']));
$email = addslashes($_POST['nasc']);
$senha = addslashes($_POST['senha']);

if ($nome == "") {
    echo "Insira seu nome";
    exit();
}

if ($email == "") {
    echo "Insira seu E-mail";
    exit();
}

if ($senha == 7) {
    echo "Sua Senha";
    exit();
}

$res = $pdo->prepare("INSERT INTO usuarios SET nome = :nome, nasc = :nasc, email = :email, senha = :senha");
$res->bindValue(':nome', $nome);
$res->bindValue(':nasc', $nasc);
$res->bindValue(':email', $email);
$res->bindValue(':senha', $senha);
$res->execute();


$query = $pdo->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
$res_ = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res_) > 0) {
    $nome = $res_[0]['nome'];
    $nasc = $res_[0]['nasc'];
    $email = $res_[0]['email'];
    $senha = $res_[0]['senha'];
    
    if (!isset($_SESSION)) {
        session_start();
    }
    
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
}

$dados = "Salvo com Sucesso!";
echo "$dados";

?>