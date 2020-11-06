<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Configuraçoes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
</head>
<body id="reportsPage">
    <div class="" id="home">
        <nav class="navbar navbar-expand-xl">
            <div class="container h-100">
              <h1 class="tm-site-title mb-0">Configurações</h1>               
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="text-white mt-5 mb-5">Bem vindo, <?php echo $_SESSION['nomeusu']; ?></p>
                </div>
            </div>
            <!-- row -->
                        
            <div class="row tm-content-row">
                <div class="tm-block-col tm-col-avatar">
                  <div class="tm-bg-primary-dark tm-block tm-block-avatar">
                    <h2 class="tm-block-title">Foto de perfil</h2>
                    <div class="tm-avatar-container">
                      <img
                        src="img/avatar.png"
                        alt="Avatar"
                        class="tm-avatar img-fluid mb-4"
                      />
                      <a href="#" class="tm-avatar-delete-link">
                        <i class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </div>
                    <button class="btn btn-primary btn-block text-uppercase">
                      Upload new Photo
                    </button>
                  </div>
                </div>
                <div class="tm-block-col tm-col-account-settings">
                  <div class="tm-bg-primary-dark tm-block tm-block-settings">
                    <h2 class="tm-block-title"></h2>
                    <form action="" class="tm-signup-form row">
                      <div class="form-group col-lg-6">
                        <label for="name">Nome</label>
                        <input
                          id="name"
                          name="name"
                          type="text"
                          class="form-control validate"
                        />
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="email">Email</label>
                        <input
                          id="email"
                          name="email"
                          type="email"
                          class="form-control validate"
                        />
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="password">Senha</label>
                        <input
                          id="password"
                          name="password"
                          type="password"
                          class="form-control validate"
                        />
                      </div>
                      <div class="form-group col-lg-6">
                        <label for="password2">Digite novamente a senha</label>
                        <input
                          id="password2"
                          name="password2"
                          type="password"
                          class="form-control validate"/>
                      </div>

                      <div class="form-group col-lg-6">
                        <label for="phone">Telefone</label>
                        <input id="phone" name="phone" type="tel" class="form-control validate"/>
                      </div>

                      <div class="form-group col-lg-6">
                        <label class="tm-hide-sm">&nbsp;</label>
                        <button
                          type="submit"
                          class="btn btn-primary btn-block text-uppercase"
                        >
                          Atualizar Perfil
                        </button>
                      </div>
                      <div class="col-12">
                          <a href="delete.php">
                        <button type="submit"class="btn btn-primary btn-block text-uppercase"> Deletar Conta </button></a>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <footer>
              
            </footer>
          </div>
      
          <script src="js/jquery-3.3.1.min.js"></script>
          <!-- https://jquery.com/download/ -->
          <script src="js/bootstrap.min.js"></script>
          <!-- https://getbootstrap.com/ -->
        </body>
      </html>
      