<?php

require_once('conexao.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Tela de Login e Cadastro</title>
</head>
<body>
	<div class="py-5">
		<form class="w-50 mx-3" method="POST" action="">
			<div class="form-floating mb-2">
				<input type="email" name="email" id="email" placeholder="Seu Email" class="form-control">
				<label>Email</label>
			</div>
			<div class="form-floating">
				<input type="password" name="senha" id="senha" placeholder="Sua Senha" class="form-control">
				<label>Senha</label>
			</div>
			<div>
		</form>
	</div>
</body>
</html>