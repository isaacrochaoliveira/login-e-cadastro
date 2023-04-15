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

$res = $pdo->query("INSERT INTO usuarios SET nome = :nome, nasc = :nasc, email = :email, senha = :senha");
$res->bindValue(':nome', $nome);
$res->bindValue(':nasc', $nasc);
$res->bindValue(':email', $email);
$res->bindValue(':senha', $senha);

echo "Salvo com Sucesso!";

?>