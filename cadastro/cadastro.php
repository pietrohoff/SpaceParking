<?php
session_start();

require 'conexao.php';
$message = '';
if (isset ($_POST['username'])  && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['senha'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $senha = $_POST['senha'];
  

  $sql = 'INSERT INTO tbusuario(emailusu, senhausu, nomeusu, foneusu, fotousu) VALUES(:email, :senha, :username, :telefone, "")';


  $statement = $connection->prepare($sql);
  if ($statement->execute([':email' => $email, ':senha' => $senha,':username' => $username,':telefone' => $telefone])) {
   header("Location:../login/index.php");
  }



}


/*

$username = "spaceparking_db";
	$password = "Estacionamento123";
	$PDO = new PDO('mysql:host=localhost;dbname=spaceparking_bdspace', $username, $password);



$nome = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);


$result_usuario = "INSERT INTO tbusuario (emailusu, senhausu, nomeusu, foneusu) VALUES ('$email', '$senha', '$nome','$telefone')";


$resultado_usuario = mysqli_query($PDO, $result_usuario);

var_dump($resultado_usuario);/*

if(mysqli_insert_id($PDO)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: ../login/index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}

