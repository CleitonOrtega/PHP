<?php

include ('conexao.php');

header("Access-Control-Allow-Origin: *");

$email = $_GET["email"];
$nome  = $_GET["nome"];
$senha = $_GET["senha"];

$con = mysqli_connect($hostname,$username,$password,$database);
$sql = "select * from usuario where email='$email'";
$result = mysqli_query($con,$sql);

$linha = mysqli_fetch_assoc($result);
if ($linha){
    echo '<script>alert("Email já cadastrado tente novamente!")</script>';
	require_once 'index.html';
}else{
    $sql = "insert into usuario(email,nome,senha) values ('$email','$nome','$senha')";
mysqli_query($con,$sql);
mysqli_close($con);
echo '<script>alert("Email cadastrado! Redirecionando para o Login")</script>';
require_once 'login.html';
}

?>

