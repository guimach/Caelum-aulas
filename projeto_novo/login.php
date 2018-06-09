<?php
    var_dump($_POST);
    $nome = $_POST["usuario"];
    var_dump($nome);
    $senha = $_POST["senha"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
   <h1>Busca </h1>
        <form action="login.php" method="POST">
            <input type="text" name="usuario" placeholder="usuario" autofocus>
            <input type="password" name="senha" placeholder="usuario" autofocus>
            <button>Login</button>
        </form>
        <p>Ola <?=$nome?></p>
        <p>Sua senha e: <?=$senha?></p>
</body>
</html>