<?php
require 'verifica.php';

if(isset($_SESSION['codigo_autonomo']) && !empty($_SESSION['codigo_autonomo'])):?>

<!DOCTYPE html>
<html lang="pt-BR" dir="ltr">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta charset="UTF-8">
  <title>Seu Perfil</title>
  <link rel="icon" type="image/png" href="img/logo/logo.png"/>
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
      <span class="text">Perfil</span>
    </div>
    <section class="dashboard">
      <!--<img src="images/profile.jpg" alt="">-->


      <div class="dash-content">
        <!--Perfil-->
        <div class="activity">
          <div class="title">
            <i class="bx bxs-user"></i>
            <span class="text">Perfil</span>
          </div>
        </div>
        <div class="container">
          <form action="#">
            <div class="form first">
              <div class="details personal">
                <span class="title">Detalhes pessoais</span>
                <br>
                <div class="fields">
                  <div class="input-field">
                    <label>Nome Completo</label>
                    <input type="text" placeholder="André Santana" required>
                  </div>

                  <div class="input-field">
                    <label>Data de Nascimento</label>
                    <input type="date" required>
                  </div>

                  <div class="input-field">
                    <label>Email</label>
                    <input type="text" placeholder="alcatrafilemion@gmail.com" required>
                  </div>

                  <button class="sumbit">
                    <span class="btnText">Confirmar alterações</span>
                    <i class="uil uil-navigator"></i>
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!--Conta-->
        <div class="activity">
          <div class="title">
            <i class="bx bxs-user-account"></i>
            <span class="text">Conta</span>
          </div>
        </div>
        <div class="container">
          <form action="#">
            <div class="form first">
              <div class="details personal">
                <span class="title">Configuração da conta</span>
                <div class="fields">
                  <div class="input-field">
                    <label>Nome de Usuário</label>
                    <input type="text" placeholder="ferdinando23" required>
                  </div>
                </div>
              </div>
            </div>
            <button class="sumbit">
              <span class="btnText">Confirmar alterações</span>
              <i class="uil uil-navigator"></i>
            </button>
          </form>
        </div>
        <div class="activity">
          <div class="title">
            <i class="bx bxs-lock-alt"></i>
            <span class="text">Segurança</span>
          </div>
        </div>
        <div class="container">
          <form action="#">
            <div class="form first">
              <div class="details personal">
                <span class="title">Configuração de segurança</span>
                <span class="title"> Trocar a senha</span>
                <div class="fields">
                  <div class="input-field">
                    <input type="text" placeholder="Senha Antiga" required>
                  </div>
                  <div class="input-field">
                    <input type="text" placeholder="Nova Senha" required>
                  </div>
                  <div class="input-field">
                    <input type="text" placeholder="Confirme a Nova Senha" required>
                  </div>
                </div>
              </div>
            </div>
            <button class="sumbit">
              <span class="btnText">Confirmar alterações</span>
              <i class="uil uil-navigator"></i>
            </button>
          </form>
        </div>
        <div class="activity">
          <div class="title">
            <i class="bx bxs-credit-card"></i>
            <span class="text">Pagamento</span>
          </div>
          <div class="container">
            <form action="#">
              <div class="form first">
                <div class="details personal">
                  <span class="title">Metodo de Pagamento</span>
                  <h5>Você não adicionou um metódo de pagamento</h5>
                </div>
              </div>
              <button class="sumbit">
                <span class="btnText">Adicionar método de pagamento</span>
                <i class="uil uil-navigator"></i>
              </button>
            </form>
          </div>
        </div>
    </section>
    </div>
  </section>
  <script src="js/script.js"></script>
</body>

</html>
<?php else: header('Location: LoginCdastro-Autonomo/login.php'); endif;?>