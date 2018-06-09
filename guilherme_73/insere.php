<?php
// Criando uma conexao ao banco de dados
$host = '127.0.0.1';
$username = 'root';
$password = 'caelum';
$dbname = 'fp73';
$conn = mysqli_connect($host, $username, $password, $dbname);

#var_dump($conn);
if($conn) {
 echo "TEM CONEXAO" ;  
$query = "INSERT INTO produtos (nome, preco, quant) VALUES('microondas', '300.50', 'quant', '20')";

var_dump(mysqli_query($conn, $query) );

}else {
 echo "SEM CONEXAO";
}
//fechando uma conexao com db
msqli_close($conn);

?>