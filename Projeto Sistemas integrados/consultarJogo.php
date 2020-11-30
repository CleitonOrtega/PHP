<?php
include ('conexao.php');

header("Access-Control-Allow-Origin: *");

$email = $_GET["email"];
$senha = $_GET["senha"];

$con = mysqli_connect($hostname,$username,$password,$database);
$sql = "select * from usuario where email='$email' and senha='$senha'";
$result = mysqli_query($con,$sql);

$linha = mysqli_fetch_assoc($result);

if ($linha){
	echo $linha["nome"];
	
}

mysqli_close($con);
?>