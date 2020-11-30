<?php
include ('conexao.php');

$email = $_GET["email"];
$senha = $_GET["senha"];

$con = mysqli_connect($hostname,$username,$password,$database);
$sql = "select * from usuario where email='$email' and senha='$senha'";
$result = mysqli_query($con,$sql);

$linha = mysqli_fetch_assoc($result);

if ($linha){
	echo'<script>alert("Login feito com sucesso")</script>';
	session_start();
	$_SESSION["email"]=$linha['email'];
	$_SESSION["nome"]=$linha['nome'];
	$_SESSION["senha"]=$linha['senha'];
	require_once 'formpage.php';
}else{
	echo '<script>alert("Usuario/Senha incorreto(s)")</script>';
	require_once 'login.html';
}

mysqli_close($con);
?>