<?php
  error_reporting(0);
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
  <nav class="navbar navbar-expand-lg navbar-light bg-primary d-flex flex-column sticky-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="./img/logotcc.png" title="N.C. Works" alt="N.C. Works"
          height="35px" width="35px" /></a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSite">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSite">
        <div class="navbar-nav mt-2 mt-lg-0">
          <?php 
                if(!isset($_SESSION["login"])){
                  echo '<div class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#siteModal">Entrar</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link" href="#" data-toggle="modal" data-target="#siteModal1">Cadastrar-se</a>
                </div>
                <div class="nav-item">
                  <a class="nav-link" href="?action=empresas">Empresas</a>
                </div>
                ';
                }

              ?>

          <div class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </div>
          <?php
                  //validar.php
                  if(isset($_SESSION["login"])){
                    $u = $_SESSION["nome"];
                    require_once "./includes/conexao.php";
                    if(filter_var($u, FILTER_VALIDATE_EMAIL)){
                      $sql = "SELECT tipo FROM tb_usuario WHERE email='$u'";
                    }else{
                      $sql = "SELECT tipo FROM tb_usuario WHERE usuario='$u'";
                    }
                    $result = mysqli_query($link, $sql);
                    $array = mysqli_fetch_array($result);
                    if($array["tipo"] == "juridica"){
                        $_SESSION["tipo"] = "empresa";
                    }elseif($array["tipo"] == "fisica"){
                        $_SESSION["tipo"] = "pessoa";
                    }
                    echo "<div class='nav-item'>
                            <a class='nav-link' href='?action=empresas'>Empresas</a>
                          </div>
                    
                          <div class='nav-item'>
                            <a class='nav-link' href='?action=pesquisar_vaga'>Pesquisar Vagas</a>
                          </div>";
                    //CRIA CADASTRAR VAGA CASO SEJA EMPRESA
                    if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "empresa"){
                      echo  "
                      <div class='nav-item'>
                        <a class='nav-link' href='?action=cadastrar_vaga'>Cadastrar Vagas</a>
                      </div>
                    "; //?action=cadastrar_vaga
                  }
                }
              ?>


        </div>
        <!-- Apresentação do usuario na seção -->
        <?php
                if(isset($_SESSION["nome"])){
                    $usuario = $_SESSION["nome"];
                    echo "
                    <div class='navbar-nav d-flex flex-row ml-auto'>
                      <div class='nav-item'><a class='btn btn-outline-light' href='?action=perfil'>$usuario</a></div>
                      &nbsp &nbsp
                      <div class='nav-item dropdown'>
                          <a class='nav-link dropdown-toggle' href='#' data-toggle='dropdown'></a>                   
                          <div class='dropdown-menu navbar-dark bg-primary'>
                            <a class='dropdown-item' href='#'>Configurações</a>
                            <a class='dropdown-item bg-danger' href='sair.php'>Sair</a>
                          </div>
                      </div>
                    </div>
                    ";
                }
        ?>
      </div>
    </div>
  </nav>
  <!-- usando GET para dar include nas paginas -->
  <div class="container">

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
                    $incluir = "pagPrincipal.php";
                    break;
                case 'cadastrar_vaga':
                    $incluir = "cadastrar_vaga.php";
                    break;
                case 'pesquisar_vaga':
                    $incluir = "pesquisar_vaga.php";
                    break;  
                case 'detalhes_vaga':
                    $incluir = "detalhes_vaga.php";
                    break;
            }
            include($incluir);
        }else{
           include("home.php");
        }
    ?>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="bts/node_modules/jquery/dist/jquery.js"></script>
  <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  <script src="js/functions.js"></script>

  <script>
    // $(function () {
    //   $('[data-toggle="popover"]').popover()
    // })
  </script>
  <script>
    $(function () {
      $('.dropdown-toggle').dropdown();
    });
    $(function (){
        $('[data-toggle="popover"]').popover()
    });
    
  </script>
</body>

</html>