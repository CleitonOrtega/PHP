<?php
include ('conexao.php');
session_start();
header("Access-Control-Allow-Origin: *");

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$emailSessao = $_SESSION["email"];

$con = mysqli_connect($hostname,$username,$password,$database);
$sql = "select * from usuario where email='$emailSessao'";
$result = mysqli_query($con,$sql);

$linha = mysqli_fetch_assoc($result);

if($linha){

    $sql = "update usuario set email='$email',nome='$nome',senha='$senha' where email='$emailSessao'";
    mysqli_query($con,$sql);
    mysqli_close($con);
    
    require_once 'logout.php';

}

?>