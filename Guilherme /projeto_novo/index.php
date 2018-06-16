    <?php
        # variaveis
        $nome = "guilherme"; // string
        $idade = 35; //number
        $magro = "NAO"; //boolean        
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - Conceitos Basicos</title>
</head>
<body>
    
    <h1>PHP - Conceitos Basicos</h1>
    <p>nome: <?php echo($nome) ?></p> 
    <p>idade: <?php echo($idade) ?></p>
    <p>magro: <?=$magro ?></p>    
</body>
</html> 