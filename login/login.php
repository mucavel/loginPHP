<?php
session_start();
include('connection.php');

if(empty($_POST['nome']) || empty($_POST['pass'])){
    header('Location: index.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$pass = mysqli_real_escape_string($conexao, $_POST['pass']);

$query = "select * from streamer where nome = '{$nome}' and senha = md5('{$pass}')";

$result = mysqli_query($conexao, $query);
 
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['nome'] = $nome;
    header('Location: streaming.php');
    exit();
}else{
    $_SESSION['invalido'] = true;
    header('Location: index.php');
    exit();
}
?>