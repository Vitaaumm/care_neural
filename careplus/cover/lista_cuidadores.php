<?php

include_once('conexao.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="homecare_neural" content="" />
        <title>Homecare+ /Lista</title>

        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

        <link href="css/styles.css" rel="stylesheet" />
        <link href="stylelista_cuidadores.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
<body>
    <!-- barra do topo-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mx-auto" style="width: 1080px;">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html">Homecare+</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.html">Início</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Procurar por cuidadores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li><a class="dropdown-item" style="text-align: center;" href="busca_distancia.html">Buscar por distância <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                          </svg></a></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="busca_especialidade.html">Buscar por especialidade <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                          </svg></a></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="busca_experiencia.html">Buscar por experiência <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
                          </svg></a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="lista_cuidadores.html">Listar todos cuidadores</a></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="#">Em breve</a></li>
                        </ul>
                      </li>
                    <form class="d-flex">
                      <input class="form-control col-1 me-1 rounded-pill" style="border-color:#C87500;" type="search" placeholder="Pesquise pelo nome do cuidador e/ou informações..." aria-label="Search">
                      <button class="btn btn-outline-success rounded-pill"style="border-color: #C87500; color: #C87500;" type="submit">Pesquisar</button>
                      <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item active"><a class="nav-link" href="lista_cuidadores.html"></a></li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Meu perfil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                          <li><a class="dropdown-item" style="text-align: center;" href="perfil_user.html">informações pessoais</a></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="perfil_user.html">Cofigurações da carteira</a></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="#">Encerrar sessão</a></li>
                          <li><hr class="dropdown-divider"></li>
                          <li><a class="dropdown-item" style="text-align: center;" href="#">Ajuda</a></li>
                        </ul>
                      </li>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
        </div>
    </nav>
<!--Lista (tabela)-->
<section class="main-content">
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
      <button type="button" class="btn btn-outline-primary-space rounded-pill" style="background-color: #ff9e1728; color: #C87500; border-color: #C87500;">Ajuda - Link direto para informações sobre localização. <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
      </svg></button>
      <br>
      <br>
  <div class="container">
    <h2 class="pb-2 border-bottom">Procurar &nbsp > &nbsp Cuidadores</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Cuidador</th>
          <th>Disponibilidade</th>
          <th>Localização aproximada</th>
          <th>Telefone</th>
          <th>Perfil</th>
          <th>Solicitar</th>
        </tr>
      </thead>
      <tbody>

      <?php
      
      $sql_consulta=mysqli_query( $conexao , " SELECT *FROM tb_usuarios" );

      while($dados=mysqli_fetch_array($sql_consulta)){
        ?>

        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[0] ?> </td>
        <td> <?= $dados[0] ?> </td>

     <?php } ?>
      

        <tr>
          <td>
            <div class="user-info">
              <div class="user-info__img">
                <img src="careplus_media/user1.png" alt="User Img">
              </div>
              <div class="user-info__basic">
                <h5 class="mb-0">Marcos Vinícius</h5>
                <p class="text-muted mb-0">@Marquin_putão</p>
              </div>
            </div>
          </td>
          <td>
            <span class="active-circle bg-success"></span> Disponível
          </td>
          <td>Saracuruna</td>
          <td>(21) 99888-9888</td>
          <td>
            <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #5F16C9; color: #5F16C9;">Ver perfil&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg></button>
          </td>
          <td>
            <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #FF9E17; color: #C87500;">Solicitar agora&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
            </svg>
            </button>
          </td>
          <tr>
            <td>
              <div class="user-info">
                <div class="user-info__img">
                  <img src="careplus_media/user1.png" alt="User Img">
                </div>
                <div class="user-info__basic">
                  <h5 class="mb-0">Marcos Vinícius</h5>
                  <p class="text-muted mb-0">@Marquin_putão</p>
                </div>
              </div>
            </td>
            <td>
              <span class="active-circle bg-warning"></span> Indisponível
            </td>
            <td>Saracuruna</td>
            <td>(21) 99888-9888</td>
            <td>
              <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #5F16C9; color: #5F16C9;">Ver perfil&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg></button>
            </td>
            <td>
              <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #FF9E17; color: #C87500;">Agendar solicitação &nbsp<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
              </svg></button>
            </td>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="user-info">
              <div class="user-info__img">
                <img src="careplus_media/user1.png" alt="User Img">
              </div>
              <div class="user-info__basic">
                <h5 class="mb-0">Marcos Vinícius</h5>
                <p class="text-muted mb-0">@Marquin_putão</p>
              </div>
            </div>
          </td>
          <td>
            <span class="active-circle bg-success"></span> Disponível
          </td>
          <td>Saracuruna</td>
          <td>(21) 99888-9888</td>
          <td>
            <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #5F16C9; color: #5F16C9;">Ver perfil&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg></button>
          </td>
          <td>
            <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #FF9E17; color: #C87500;">Solicitar agora&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
            </svg>
            </button>
          </td>
          <tr>
            <td>
              <div class="user-info">
                <div class="user-info__img">
                  <img src="careplus_media/user1.png" alt="User Img">
                </div>
                <div class="user-info__basic">
                  <h5 class="mb-0">Marcos Vinícius</h5>
                  <p class="text-muted mb-0">@Marquin_putão</p>
                </div>
              </div>
            </td>
            <td>
              <span class="active-circle bg-warning"></span> Indisponível
            </td>
            <td>Saracuruna</td>
            <td>(21) 99888-9888</td>
            <td>
              <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #5F16C9; color: #5F16C9;">Ver perfil&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg></button>
            </td>
            <td>
              <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #FF9E17; color: #C87500;">Agendar solicitação &nbsp<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
              </svg></button>
            </td>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="user-info">
              <div class="user-info__img">
                <img src="careplus_media/user1.png" alt="User Img">
              </div>
              <div class="user-info__basic">
                <h5 class="mb-0">Marcos Vinícius</h5>
                <p class="text-muted mb-0">@Marquin_putão</p>
              </div>
            </div>
          </td>
          <td>
            <span class="active-circle bg-success"></span> Disponível
          </td>
          <td>Saracuruna</td>
          <td>(21) 99888-9888</td>
          <td>
            <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #5F16C9; color: #5F16C9;">Ver perfil&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg></button>
          </td>
          <td>
            <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #FF9E17; color: #C87500;">Solicitar agora&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z"/>
            </svg>
            </button>
          </td>
          <tr>
            <td>
              <div class="user-info">
                <div class="user-info__img">
                  <img src="careplus_media/user1.png" alt="User Img">
                </div>
                <div class="user-info__basic">
                  <h5 class="mb-0">Marcos Vinícius</h5>
                  <p class="text-muted mb-0">@Marquin_putão</p>
                </div>
              </div>
            </td>
            <td>
              <span class="active-circle bg-warning"></span> Indisponível
            </td>
            <td>Saracuruna</td>
            <td>(21) 99888-9888</td>
            <td>
              <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #5F16C9; color: #5F16C9;">Ver perfil&nbsp<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
              </svg></button>
            </td>
            <td>
              <button class="btn btn-outline-primary btn-sm rounded-pill" style="border-color: #FF9E17; color: #C87500;">Agendar solicitação &nbsp<svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-calendar4" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
              </svg></button>
            </td>
              </div>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</section>


<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
<script src=""></script>

</body>
</html>