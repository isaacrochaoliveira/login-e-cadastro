<?php

require_once('../conexar.php');
@session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel</title>
    </head>
    <body>
        <h1>Olá <?=$_SESSION['nome']?></h1>
        <p><?=$_SESSION['email']?></p>
    </body>
</html>