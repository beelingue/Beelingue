<?php
require 'verifica.php';

if(isset($_SESSION['codigo_autonomo']) && !empty($_SESSION['codigo_autonomo'])):?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Estatísticas</title>
  <!--
    Arquivo CSS
-->
  <link rel="icon" type="image/png" href="img/logo/logo.png"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style2.css">
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>

  <header>
    <!--
        Barra de progresso
      -->
    <div class="barra_prog"></div>
  </header>

  <main>
    <!--
            Side navbar
        -->
        <div class="sidebar close">
    <div class="logo-details">
      <a class="navbar-brand"><img src="image/logos/logo_abelha_transp.png" width="90%" height="90%"
          alt="logo do site"></a>
      <span class="logo_name">Beelíngue</span>
    </div>
    <ul class="nav-links">
      <li>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="turmas.php">Turmas</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="turmas.php">
            <i class='bx bx-collection'></i>
            <span class="link_name">Turmas</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="turmas.php">Turmas</a></li>
          <li><a href="turmas.php">Turma 1</a></li>
          <li><a href="turmas.php">Turma 2</a></li>
          <li><a href="turmas.php">Turma 3</a></li>
        </ul>
      </li>
      <li>
        <a href="tarefas.php">
          <i class='bx bx-task'></i>
          <span class="link_name">Tarefas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="tarefas.php">Tarefas</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="estatisticas.php">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="link_name">Estatísticas</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="estatisticas.php">Estatísticas</a></li>
          <li><a href="#">Alunos</a></li>
          <li><a href="#">Turmas</a></li>
        </ul>
      </li>
      <li>
        <a href="chat.php">
          <i class='bx bx-chat'></i>
          <span class="link_name">Chat</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="chat.php">Chat</a></li>
        </ul>
      </li>
      <li>
        <a href="usuario.php">
          <i class='bx bx-user'></i>
          <span class="link_name">Usuário</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="usuario.php">Usuário</a></li>
        </ul>
      </li>
      <li>
        <div class="profile-details">
          <div class="profile-content">
            <img src="image/profile.jpg" alt="profileImg">
          </div>
          <div class="name-job">
          <div class="profile_name"><?php echo $nome_autonomo;?></div>
            <div class="job">Professor</div>
          </div>
          <!-- Botão sair (perfil) -->
          <a href="login.html"><i class='bx bx-log-out'></i></a>
        </div>
      </li>
    </ul>
  </div>
    <!--
      Fim da navbar
        -->

    <!--
          Section em conflito com as grids
        -->
    <section class="home-section">
      <div class="home-content">
        <i class='bx bx-menu'></i>
        <span class="text">Sua Atividade</span>
        <img src="img/estatisticas/ajustar.png" id="config_icon">
        <img src="img/estatisticas/pen_colored.png" id="edit_icon">
      </div>

      <!--
          Section em conflito com as grids
        -->
      <!--
          Frequência do aluno
        -->

        <div id="estat">
          <!--GRID (2 colunas)-->
  
          <div id="box_estat">
            <h4 id="title_estat">Insights</h4>
            <img src="img/graf_pizza_estat_wireframe.png" id="pizza_graf" alt="gráfico de progresso">
            <p id="p_estat">
  
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque facere quod debitis pariatur similique
              delectus perferendis illum nostrum quae, impedit porro error cupiditate ea qui molestias eos ipsum
              laudantium
              consequuntur.
            </p>
          </div>
  
          <div id="box_evo">
            <h4 id="title_estat">Progresso</h4>
            <img src="img/graf_pizza_estat_wireframe.png" id="pizza_graf" alt="gráfico de progresso">
            <p id="p_evo">
  
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloremque facere quod debitis pariatur similique
              delectus perferendis illum nostrum quae, impedit porro error cupiditate ea qui molestias eos ipsum
              laudantium
              consequuntur.
            </p>
          </div>
  
          <div id="desc_estat">
            <h3 id="title_estat">Seleção</h3>
            <p id="p_desc_estat">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel reprehenderit corrupti dignissimos eum architecto nulla veniam, nobis obcaecati in praesentium aliquid veritatis ut. Alias voluptates corporis ullam dolor?
            </p>
            <div class="dropdown">
              <ul>
                <li>
                  <a href="#" id="list_base">
                    <p>Meus Alunos</p>
                  </a>
                  <ul>
                    <li>
                      <a href="#">
                        <p>Aluno A</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <p>Aluno B</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <p>Aluno C</p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <hr>
  </main>

  <footer>

  </footer>

  <script src="js/script.js"></script>

</body>

</html>
<?php else: header('Location: LoginCdastro-Autonomo/login.php'); endif;?>