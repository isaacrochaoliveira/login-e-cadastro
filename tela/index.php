<?php

require_once('conexao.php');
$pag = "index";
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
	<div class="d-flex justify-content-around" style="padding-top: 150px">
		<form class="w-50 mx-3" method="POST" action="#">
			<div class="form-floating mb-2">
				<input type="email" name="email" id="email" placeholder="Seu Email" class="form-control">
				<label>Email</label>
			</div>
			<div class="form-floating mb-2">
				<input type="password" name="senha" id="senha" placeholder="Sua Senha" class="form-control">
				<label>Senha</label>
			</div>
			<div class="d-block mt-4">
				<div>
					<button class="btn btn-success w-25" nam="btnLogin" id="btnLogin">Entrar</button>
				</div>
				<hr>
				<div>
					<a href="cadastro.php" class="btn btn-secondary w-25">Cadastre-se</a>
				</div>
			</div>
		</form>
		<div class="w-50 text-center py-5">
			<h1>SUA LOGO</h1>
		</div>
	</div>
</body>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#btnLogin").click(function() {
            var pag = "<?=$pag?>";
            $.ajax({
                url: pag + '/logar.php',
                method: 'post',
                data: $('#form').serialize(),
                dataType: 'text',
                success: function(msg) {
                    if (msg.trim() == "Logado com Sucesso!") {
                        window.location = 'painel/index.php';
                    } else {
                        alert(msg);
                    }
                }
            })
        })
    })
</script>
</html>