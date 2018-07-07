<?php

$user = $_POST['usuario'];
$senha = $_POST['senha'];

session_start();

$_SESSION['user'] = $user;
$_SESSION['senha'] = $senha;

if ($senha == '123456'){
  header('location: /painel.php');
} else{
  header('location: /index.php');
}


 ?>
