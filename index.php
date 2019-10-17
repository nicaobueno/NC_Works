<?php
  session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/estilo2.css"/>
  <link rel="shortcut icon" type="image/png" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">

  <title>N.C. WORKS</title>
</head>

<body class="bg-light">

  <!--Cabeçalho-->
  <nav class="navbar nabar-fixed-top navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      
      <a class="navbar-brand h1 mb-0" href="index.php"><img id="logocabeca" src="img/logotcc.png" title="N.C. Works"
          alt="N.C. Works" height="40px" width="40px"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSite">

        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="?action=entrar" data-toggle="modal" data-target="#siteModal">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?action=cadastrar" data-toggle="modal" data-target="#siteModal1">Cadastrar-se</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="empresas.php">Empresas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Entre em contato</a>
          </li>
          <?php
            if(isset($_SESSION["nome"])){
              $usuario = $_SESSION["nome"];
              echo  "<li class='nav-item'>
              <a class='nav-link' href='cadastrar_vaga.php'>Cadastrar Vagas</a>
            </li>"; //?action=cadastrar_vaga
            }
          ?>
        </ul>

        <!-- Apresentação do usuario na seção -->
        <?php
              if(isset($_SESSION["nome"])){
                  $usuario = $_SESSION["nome"];
                  // echo "<div class='navbar-nav ml-auto'>";
                  echo "<ul class='navbar-nav'>";
                  echo "<li class='nav-item'><a class='btn btn-outline-light' href='?action=perfil'>$usuario</a></li>";
                  echo "&nbsp &nbsp";
                  echo "<li class='nav-item dropdown'>
                          <a class='nav-link dropdown-toggle' href='' data-toggle='dropdown' id='navDrop'></a>                   
                          <div class='dropdown-menu navbar-dark bg-primary'>
                            <a class='dropdown-item' href='#'>Configurações</a>
                            <a class='dropdown-item bg-danger' href='sair.php'>Sair</a>
                          </div>
                        </li>";
                  // echo "<li class='nav-item'><a href='sair.php'><button class='btn btn-danger'>Sair</button></a></li>";
                  echo "</ul>";
                  // echo "</div>";
                  
              }
            ?>
      </div>
    </div>
  </nav>
  <!-- usando GET para dar include nas paginas -->
  <?php
        if (isset($_GET["action"])) {
            switch ($_GET["action"]) {
                case 'cadastrar':
                    $incluir = "cadastro.php";
                    break;
                case 'entrar':
                    $incluir = "login.php";
                    break;
                case 'empresas':
                    $incluir = "empresas.php";
                    break;
                case 'contato':
                    $incluir = "contato.php";
                    break;
                case 'perfil':
                    $incluir = "perfil.php";
                    break;
                case 'cadastrar_vaga':
                $incluir = "cadastrar_vaga.php";
                break;
                  
            }
            include($incluir);
        }else{
           include("home.php");
        }
    ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="bts/node_modules/jquery/dist/jquery.js"></script>
  <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>

  <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })
  </script>
  <script>
    $(function () {
        $('.dropdown-toggle').dropdown();
    }); 
  </script>
</body>

</html>