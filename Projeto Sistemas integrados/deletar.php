<?php

include ('conexao.php');
session_start();
header("Access-Control-Allow-Origin: *");

$email = $_SESSION['email'];
$nome  = $_SESSION['nome'];
$senha = $_SESSION['senha'];

$con = mysqli_connect($hostname,$username,$password,$database);
$sql = "select * from usuario where email='$email' and senha='$senha' and nome='$nome'";
$result = mysqli_query($con,$sql);

$linha = mysqli_fetch_assoc($result);
if ($linha){
    $sql = "delete from usuario where email='$email' and senha='$senha' and nome='$nome'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    require_once 'logout.php';
    
    echo '<script>alert("Conta deletada!")</script>';
}

?>