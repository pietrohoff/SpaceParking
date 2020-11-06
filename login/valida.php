<?php

	session_start();	
	//Incluindo a conexão com banco de dados
   // include_once("conexao.php");	
//conecto no banco
	$username = "spaceparking_db";
	$password = "Estacionamento123";
	$PDO = new PDO('mysql:host=localhost;dbname=spaceparking_bdspace', $username, $password);
	
//leio o formulario

	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
	//$senha = md5($senha);

//crio a query 
	$sql = "SELECT * FROM tbusuario WHERE emailusu = :email AND senhausu = :senha";

	$stmt = $PDO->prepare($sql);
	 
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':senha', $senha);
	 
	$stmt->execute();
	 
	$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
	 
	if (count($users) <= 0)
	{
	    echo "Email ou senha incorretos";
	    exit;
	}
	 
	// pega o primeiro usuário
	$user = $users[0];
	 
	session_start();
	$_SESSION['logged_in'] = true;
	$_SESSION['user_id'] = $user['idusu'];
	$_SESSION['nomeusu'] = $user['nomeusu'];
	$_SESSION['emailusu'] = $user['emailusu'];
	$_SESSION['foneusu'] = $user['foneusu'];
	$_SESSION['senhausu'] = $user['senhausu'];
	$_SESSION['fotousu'] = $user['fotousu'];
	 
	header('Location: menu/index.php');


	/*O campo usuário e senha preenchido entra no if para validar
	if((isset($_POST['email'])) && (isset($_POST['senha']))){
		$usuario = mysqli_real_escape_string($conn, $_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($conn, $_POST['senha']);
		var_dump($senha ." usuario".$usuario);
		$senha = md5($senha);

		$usuario = mysqli_real_escape_string($_POST['email']); //Escapar de caracteres especiais, como aspas, prevenindo SQL injection
		$senha = mysqli_real_escape_string($_POST['senha']);
		$senha = md5($senha);
			
		//Buscar na tabela tbusuario o usuário que corresponde com os dados digitado no formulário
		$result_usuario = "SELECT * FROM tbusuario WHERE email = '$usuario' && senha = '$senha' LIMIT 1";
		$resultado_usuario = mysqli_query($conn, $result_usuario);
		$resultado = mysqli_fetch_assoc($resultado_usuario);
		
		//Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		if(isset($resultado)){
			$_SESSION['usuarioId'] = $resultado['id'];
			$_SESSION['usuarioNome'] = $resultado['nome'];
			$_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
			$_SESSION['usuarioEmail'] = $resultado['email'];
			if($_SESSION['usuarioNiveisAcessoId'] == "1"){
				header("Location: administrativo.php");
			}elseif($_SESSION['usuarioNiveisAcessoId'] == "2"){
				header("Location: colaborador.php");
			}else{
				header("Location: cliente.php");
			}
		//Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
		//redireciona o usuario para a página de login
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['loginErro'] = "Usuário ou senha Inválido";
			header("Location: index.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['loginErro'] = "Usuário ou senha inválido";
		//header("Location: index.php");
		echo "<scpript> alert('pietro@gmail.com')</script>";
	}
*/
?>