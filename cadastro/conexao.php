<?php
$dsn = 'mysql:host=localhost;dbname=spaceparking_bdspace';
$username = 'spaceparking_db';
$password = 'Estacionamento123';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
   echo" deu merda: ".$e->getMessage();
}
?>