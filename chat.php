<?php
require 'verifica.php';

if(isset($_SESSION['codigo_autonomo']) && !empty($_SESSION['codigo_autonomo'])):?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chat</title>
  <link rel="icon" type="image/png" href="img/logo/logo.png" />
  <link type="text/css" rel="stylesheet" href="../css/style.css">
  <link type="text/css" rel="stylesheet" href="../css/style2.css">
  <link type="text/css" rel="stylesheet" href="chat/style/homepage.css">
  <link type="text/css" rel="stylesheet" href="chat/style/inbox.css">
  <link type="text/css" rel="stylesheet" href="chat/style/chat.css">
  <link type="text/css" rel="stylesheet" href="chat/style/profile.css">
  <script src="js/jquery.js"></script>
  <!-- Boxiocns CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <!-- Other imports -->
  <script src="js/sweetalert2.js"></script>
  <link rel="stylesheet" href="style/sweetalert2.css">
</head>

<body>

  <!--side bar -->
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

  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu'></i>
      <span class="text">Chat</span>

      <div class="content">
        <!-- Chat-->
        <div id="loading">Loading&#8230;</div>

        <div id="inbox" class="column">
          <p class="title">Conversas</p>
          <input type="text" maxlength="15" name="username" class="searchField" onkeyup="search()"
            placeholder="Pesquisar utilizador" />
          <div id="searchContainer"></div>
          <div class="container"></div>
        </div>

        <div id="chat" class="column"></div>

        <script>
          function loadInbox() {
            $.ajax({
              url: 'process/inbox.php',
              success: function (data) {
                $('#inbox .container').html(data);
              },
              error: function (error) {
                console.log(error);
                Swal.fire({
                  title: 'Erro',
                  text: error.statusText,
                  icon: 'error',
                  confirmButtonText: 'Ok'
                })
              }
            });
          }

          function chat(id = 0) {
            $.ajax({
              url: 'process/chat.php?id=' + id,
              success: function (data) {
                $('#chat').html(data);
                loadProfile(id);
              },
              error: function (error) {
                console.log(error);
                Swal.fire({
                  title: 'Erro',
                  text: error.statusText,
                  icon: 'error',
                  confirmButtonText: 'Ok'
                })
              }
            });
          }

          function search() {
            var term = $("input.searchField").val();
            if (term.length >= 3) {
              $.ajax({
                url: 'process/search.php?term=' + term,
                success: function (data) {
                  $('#searchContainer').show();
                  $('#searchContainer').html(data);
                }
              });
            } else {
              $('#searchContainer').hide();
            }
          }

          function logout() {
            $.ajax({
              url: 'process/logout.php',
              beforeSend: function () {
                $('#loading').show();
              },
              success: function () {
                location.href = 'auth.html';
              }
            });
          }

          $(document).ready(function () {
            setInterval(() => {
              loadInbox();
            }, 3000);
            loadProfile();
            chat();
          });
        </script>
      </div>
    </div>
  </section>
</body>

<script src="../js/script.js"></script>

</html>
<?php else: header('Location: LoginCdastro-Autonomo/login.php'); endif;?>