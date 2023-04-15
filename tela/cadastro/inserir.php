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
$res = $query->fetchAll(PDO::FETCH_ASSOC);
if (count($res) > 0) {
    $nome = $res[o]['nome'];
    $nasc = $res[0]['nasc'];
    $email = $res[0]['email'];
    $senha = $res[0]['senha'];
}

$dados = "Salvo com Sucesso!#@-/$nome#@-/$nasc#@-/$email#@-/$senha";
echo "$dados";

?>