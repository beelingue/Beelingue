<?php
require 'verifica.php';

if(isset($_SESSION['codigo_autonomo']) && !empty($_SESSION['codigo_autonomo'])):?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title> Seja Bem-Vindo(a)! </title>
  <!--
    Arquivo CSS
-->
  <link rel="icon" type="image/png" href="img/logo/logo.png" />
  <link rel="stylesheet" href="css/style.css">
  <meta http-equiv="X-UA-Compatible" content="IE-edge" />
  <!-- Boxiocns CDN Link -->
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
  <!-- Side navbar-->

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Turmas</span>

      <!--
        MÓDULOS
      -->
      <div class="content">
        <!-- Modulo 1 -->
        <div class="card one" value="Redirecionar sem Histórico" onclick="redirecioneComHistorico();">
          <div class="top">
            <div class="title">Turma</div>
            <div class="price-sec">
              <span class="price">1</span>
            </div>
          </div>
          <div class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar urna ut eros mattis
            interdum. Sed facilisis placerat justo vel posuere. Sed sed viverra lectus. Suspendisse eleifend, turpis nec
            pretium sodales, nibh ligula commodo felis, vitae ultrices enim nisi non urna. Nunc vitae dictum lacus, id
            eleifend urna.</div>
          <div class="details">
            <div class="one">
            </div>
          </div>
        </div>

        <!-- Modulo 2 -->
        <div class="card two" value="Redirecionar sem Histórico" onclick="redirecioneComHistorico2();">
          <div class="top">
            <div class="title">Turma</div>
            <div class="price-sec">
              <span class="price">2</span>
            </div>
          </div>
          <div class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar urna ut eros mattis
            interdum. Sed facilisis placerat justo vel posuere. Sed sed viverra lectus. Suspendisse eleifend, turpis nec
            pretium sodales, nibh ligula commodo felis, vitae ultrices enim nisi non urna. Nunc vitae dictum lacus, id
            eleifend urna.</div>
          <div class="details">
            <div class="one">
            </div>
          </div>
        </div>

        <!-- Modulo 3 -->
        <div class="card three" value="Redirecionar sem Histórico" onclick="redirecioneComHistorico3();">
          <div class="top">
            <div class="title">Turmas</div>
            <div class="price-sec">
              <span class="price">3</span>
            </div>
          </div>
          <div class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut pulvinar urna ut eros mattis
            interdum. Sed facilisis placerat justo vel posuere. Sed sed viverra lectus. Suspendisse eleifend, turpis nec
            pretium sodales, nibh ligula commodo felis, vitae ultrices enim nisi non urna. Nunc vitae dictum lacus, id
            eleifend urna.</div>
          <div class="details">
            <div class="one">
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <script src="js/script.js"></script>
</body>

</html>
<?php else: header('Location: LoginCdastro-Autonomo/login.php'); endif;?>