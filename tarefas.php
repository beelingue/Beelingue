<?php
require 'verifica.php';

if(isset($_SESSION['codigo_autonomo']) && !empty($_SESSION['codigo_autonomo'])):?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Suas Tarefas</title>
    <link rel="icon" type="image/png" href="img/logo/logo.png" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- Side navbar-->
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
            <span class="text">Tarefas</span>
            
            <div class="content">
                <section class="dashboard">
                    <div class="dash-content">
                        <div class="overview">
                            <div class="title">
                                <i class="bx bx-task"></i>
                                <span class="text">Módulo 1</span>
                            </div>

                            <div class="boxes">
                                <div class="box box1">
                                    <i class="bx bx-lock-open-alt"></i>
                                </div>
                                <div class="box box2" onclick="bloqueado()">
                                    <i class="bx bx-lock-alt"></i>
                                </div>
                                <div class="box box3" onclick="bloqueado()">
                                    <i class="bx bx-lock-alt"></i>
                                </div>
                            </div>
                            <div class="title">
                                <i class="bx bx-task"></i>
                                <span class="text">Módulo 2</span>
                            </div>

                            <div class="boxes">
                                <div class="box box1">
                                    <i class="bx bx-lock-open-alt"></i>
                                </div>
                                <div class="box box2" onclick="bloqueado()">
                                    <i class="bx bx-lock-alt"></i>
                                </div>
                                <div class="box box3" onclick="bloqueado()">
                                    <i class="bx bx-lock-alt"></i>
                                    
                                </div>
                            </div>
                            <div class="title">
                                <i class="bx bx-task"></i>
                                <span class="text">Módulo 3</span>
                            </div>

                            <div class="boxes">
                                <div class="box box1">
                                    <i class="bx bx-lock-open-alt"></i>
                                </div>
                                <div class="box box2" onclick="bloqueado()">
                                    <i class="bx bx-lock-alt"></i>
                                </div>
                                <div class="box box3" onclick="bloqueado()">
                                    <i class="bx bx-lock-alt"></i>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
    </section>
    </section>
    <script src="js/script.js"></script>
</body>

</html>
<?php else: header('Location: LoginCdastro-Autonomo/login.php'); endif;?>
