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
    <link rel="icon" href="img/logotcc.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilobt/node_modules/bootstrap/compiler/bootstrap.css"/>

    <title>N.C. WORKS</title>
  </head>
  <body>

    <!--Cabeçalho-->
    <nav class="navbar nabar-fixed-top navbar-expand-lg navbar-light bg-primary">

      <div class="container">

        <a class="navbar-brand h1 mb-0" href="index.php"><img id="logocabeca" src="img/logotcc.png" title="N.C. WORKS" alt="N.C. WORKS"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarSite">

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="?action=cadastrar">Cadastrar-se</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=entrar">Entrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=empresas">Empresas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=contato">Entre em contato</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" data-toggle="dropdown" id="navDrop">Redes Sociais</a>                   
                    <div class="dropdown-menu navbar-dark bg-dark">
                      <a class="dropdown-item" href="#">Facebook</a>
                      <a class="dropdown-item" href="#">Intagram</a>
                      <a class="dropdown-item" href="#">WhatsApp</a>
                    </div>
                  </li>
                </ul>
                <form class="form-inline">
                  <input class="form-control ml-2 mr-auto" type="search" placeholder="Pesquisar...">
                  <button class="btn btn-dark" type="submit">Ok</button>
                </form>
            </div>
          </div>
    </nav>
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
            }
            include($incluir);
        }else{
           include("home.php");
        }
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/estilobt/node_modules/jquery/dist/jquery.js"></script>
    <script src="css/estilobt/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="css/estilobt/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>