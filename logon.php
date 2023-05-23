<?php
/*Criando conexão com o banco de dados */

$servidor = 'localhost';
$user = 'root';
$password = 'root';
$banco = 'sistema';

$conexao = mysqli_connect($servidor,$user,$password,$banco);

/*Recebendo dados do form */

$login = $_POST ['login'];
$senha = $_POST ['senha'];

$sql = "SELECT * FROM usuarios WHERE login = '$login' ";
$seach = mysqli_query($conexao,$sql);
$array = mysqli_fetch_array($seach);

$senhabanco = $array['senha'];

if ($senhabanco == $senha) {
    
    header('location: /sistema/cadastro_cliente.php');

}

else{
    header('location: login.php?msg=1');
    myql_close();



}


?>