<?php

include_once('conexao.php');


$sql = "SELECT *FROM tb_cuidador ORDER BY nome DESC";

$result = $conexao2->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="homecare_neural" content="" />
        <title>CarePlus</title>
        
        <link rel="shortcut icon" href="careplus_media/icon.png" type="image/x-icon">

        <link href="stylelista_cuidadores.css" rel="stylesheet" />

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        
        <link href="css/stylecards.css" rel="stylesheet" />
        
        <link href="css/styles.css" rel="stylesheet" />
        
        <link rel="stylesheet" href="assets/css/styles.css">
        
        <link href="styleindex.css" rel="stylesheet" />

    </head>
<body>
<header class="header">
  <div class="header__container">
      <img src="careplus_media/user_1.png" alt="" class="header__img">
      
        <a href="#" class="nav__link">
            <i class='' ></i>
            <span class=""></span>
            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
        </a>
      <img src="careplus_media/navlogo.png" href="#" class="header__logo"></img>

      <div class="header__toggle">
          <i class='bx bx-menu' id="header-toggle"></i>
      </div>
  </div>
</header>

<div class="nav" id="navbar">
  <nav class="nav__container">
      <div>
          <a href="index.html" class="nav__link nav__logo">
          </a>
          <div class="nav__list">
              <div class="nav__items">
                  <h3 class="nav__subtitle">Início</h3>

                  <a href="index.html" class="nav__link">
                      <i class='bx bx-home nav__icon' ></i>
                      <span class="nav__name">Menu principal</span>
                  </a>

                  <a href="solicitar.html" class="nav__link">
                      <i class='bx bx-bookmark-alt-plus nav__icon' ></i>
                      <span class="nav__name">Solicitar</span>
                  </a>

                  <div class="nav__dropdown">
                    <a href="#" class="nav__link active">
                        <i class='bx bx-compass nav__icon'></i>
                        <span class="nav__name">Buscar cuidadores</span>
                        <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                    </a>

                    <div class="nav__dropdown-collapse">
                        <div class="nav__dropdown-content">
                            <a href="busca_distancia.html" class="nav__dropdown-item">Buscar por distância</a>
                            <a href="busca_especialidade.html" class="nav__dropdown-item">Buscar por especialidade</a>
                            <a href="busca_experiencia.html" class="nav__dropdown-item">Buscar por experiência</a>
                            <a href="lista_cuidadores2.php" class="nav__dropdown-item active">Listar todos cuidadores</a>
                        </div>
                    </div>
                </div>
              </div>

              <div class="nav__items">
                  <h3 class="nav__subtitle">Menu</h3>
                  <div>
                    <a href="minhas_solicitacoes.html" class="nav__link nav__icon">
                      <i class='bx bx-book-content'></i>
                      <span class="nav__name"> &nbsp Minhas solicitações</span>
                  </a>
                  </div>

                  <div class="nav__dropdown">
                      <a href="#" class="nav__link">
                          <i class='bx bx-user nav__icon' ></i>
                          <span class="nav__name">Meu perfil</span>
                          <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                      </a>
                    
                      <div class="nav__dropdown-collapse">
                          <div class="nav__dropdown-content">
                            <a href="perfil_user.html" class="nav__dropdown-item">Informações pessoais</a>
                                      <a href="" class="nav__dropdown-item">pagamento <h6><span class="badge bg-secondary" style="font-family: PSB;">Em breve</span></h6></a>
                                      <a href="localizacao.html" class="nav__dropdown-item">Localização</a>
                          </div>
                      </div>
                  </div>
                  

                  <a href="#" class="nav__link">
                    <i class='bx bx-help-circle nav__icon' ></i>
                    <span class="nav__name">Ajuda <h6><span class="badge bg-secondary" style="font-family: PSB;">Em breve</span></h6></span>
                </a>
              </div>
          </div>
      </div>

      <a href="#" class="nav__link nav__logout">
          <i class='bx bx-log-out nav__icon' ></i>
          <span class="nav__name">Encerrar sessão</span>
      </a>
  </nav>
</div>
<section class="lista">
  <div class="container-fluid">
    
    <div class="container px-4 py-5" id="custom-cards">
      <div class="alert alert-success" style="background-color: #ff9e1728; color: #C87500; border-color: #C87500;" role="alert">
        <h4 class="alert-heading">Localização <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
          <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
          <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg></h4>
        <p>
          As localizações aproximadas apresentadas não são em tempo real e podem ser alteradas pelos cuidadores. Portanto lembre-se sempre de verificar a localização aproximada do cuidador antes e depois de fechar uma solicitação. 
        </p>
        <hr>
        <p class="mb-0">para mais informações, acesse a aba ajuda.</p>
      </div>
      <button type="button" class="btn btn-outline-primary-space rounded-pill" style="background-color: #ff9e1728; color: #C87500; border-color: #C87500;">Ajuda - (em breve)<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
      </svg></button>
      <br>
      <br>
  <div class="container">
    <br>
    <h2 class="pb-2 border-bottom">Início &nbsp > &nbsp Listar todos os cuidadores</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Cuidador</th>
          <th>Email</th>
          <th>Localização</th>
          <th>Telefone</th>
        </tr>
      </thead>
          
                  <?php

                    while($user_data = mysqli_fetch_assoc($result)){

                    echo "<tr>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['Endereço']."</td>";
                    echo "<td>".$user_data['Contato']."</td>";
                    
                     }

                  ?>

                  
</body>
</html>