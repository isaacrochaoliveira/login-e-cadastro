<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Cadastro</title>
</head>
<body class="bg-dark">
    <div class="bg-light w-50 mx-auto">
        <form class="my-5 py-3" action="">
            <div class="py-2 text-center">
                <h1>SUA LOGO</h1>
            </div>
            <div class="mx-5">
                <div class="row">
                    <div class="col">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Informe seu nome">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Informe o seu email">
                    </div>
                    <div class="col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Sua senha">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="nasc">Data de Nascimento</label>
                        <input type="date" name="nasc" id="nasc" class="form-control" value="<?=Date('Y-m-d')?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>