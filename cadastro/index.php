<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastro - Spaceparking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/icon" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script type="text/javascript">

	function mascara(celular){
			if(celular.value.length == 0)
				celular.value = "(" + celular.value;
			
			if(celular.value.length == 3)
				celular.value = celular.value + ')';

			if(celular.value.length == 9)
				celular.value = celular.value + '-';
	}

</script>   

</script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                           
            
            <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="POST" action="cadastro.php">
					<span class="login100-form-title">
						<img src="images/icons/logo.png" alt="logoFlip" height="150" width="300">
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Insira seu usuário">
						<input class="input100" type="text" name="username" maxlength="40" placeholder="Usuário">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Insira seu email">
						<input class="input100" type="email" name="email" maxlength="50" placeholder="Email">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Insira seu telefone">
						<input onkeypress="mascara(this)" size="20" maxlength="14" id="telefone" class="input100" type="Telefone" name="telefone" placeholder="Telefone" maxlength="13">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Insira sua senha">
						<input class="input100" type="password" maxlength="8" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
						
					</div>
					<div class="wrap-input100 validate-input m-b-17" data-validate="email">
			        </div>

<!--
					<div>
						<input type="radio" name="nome_do_grupo" value="valor"/> 
					   <a href="#" class="txt2">
						Li e aceito os termos
					   </a><br><br><br>
					</div> 
	-->				
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Cadastrar
						</button>
					</div>

					<div class="text-center p-t-13 p-b-23">
						<a href="../login/index.php" class="txt2">
							Já possui uma conta?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>