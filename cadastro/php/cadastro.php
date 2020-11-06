<?php 

 $login = $_POST['username'];
 $email = $_POST['emailAluno'];
 $senha = md5($_POST['pass']);
 $turma = $_POST['turma']

$con =new PDO("mysql: host=localhost; dbname=test", "root", "");
$stmt = $con->prepare("INSERT INTO usuarios(login, senha, email, turma) VALUES(?, ?, ?, ?)");
$stmt->bindParam(1, $login);
$stmt->bindParam(2, $pass);
$stmt->bindParam(3, $email);
$stmt->bindParam(4, $turma);

if($stmt->execute()){
  echo "deu bom";
} else {
  echo "puts cara";
}
?>