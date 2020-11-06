<?php
	session_start();
	echo "Usuario: ". $_SESSION['nomeusu'];	
?>
<br>
<a href="logout.php">Sair</a>