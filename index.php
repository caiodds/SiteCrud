<?php
include('config.php');
if ((isset($_POST["acao"]))) {
	$nome = $_POST["nome"];
    $email = $_POST["email"];
	
	$sql = "INSERT INTO player(nome,email) VALUES ('{$nome}','{$email}')";
    $res = $con->query($sql);


	if (empty($_POST) or (empty($_POST["nome"])or (empty($_POST["email"])))) {
		echo "Campos vazios";
	}else{
		print "<script>alert('cadastrado com sucesso!')</script>";
		print "<script>window.location.href='home.php'</script>";
		$nome = $_POST["nome"];
		$email = $_POST["email"];
	
		$sql = "INSERT INTO player(nome,email) VALUES ('{$nome}','{$email}')";
		$res = $con->query($sql);
	}
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cadastro</title>
</head>
<body>
    <form method="POST">
    <h1 class="bem">Seja bem vindo </h1><br>
    <p class="nome"> <i class="fa-solid fa-user"></i>Digite seu nome</p></i> 
    <input name="nome" class="barra" type="text" placeholder="Nome aqui" required><br>
    <p> <i class="fa-solid fa-envelope"></i> Digite seu email</p>
    <input name="email"  type="email" placeholder="Digite seu email" required><br>

    <button name="acao" type="submit" class="btn btn-primary">Cadastrar <i class="fa-solid fa-right-to-bracket"></i> </button>
    <p>Bem vindo ao servidor <a class="entrar" href="samp://">Clique aqui para copiar o ip</a></p>
</form>
    <script>

    </script>
</body>
</html>