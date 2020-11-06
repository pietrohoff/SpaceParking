<?php
require 'conexao.php';
$id = $_GET['id'];
$sql = 'DELETE FROM tbusuario WHERE idusu=:idusu';
$statement = $connection->prepare($sql);
if ($statement->execute([':idusu' => $id])) {
  header("Location: /");
}