<html>
    <head>
        <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    </head>
    <body>
        <nav class="navbar nabar-fixed-top navbar-expand-lg navbar-light bg-primary">

            <div class="container">
        
              <a class="navbar-brand h1 mb-0" href="index.html"><img id="logocabeca" src="img/logotcc.png" title="N.C. Works" alt="N.C. Works" height="40px" width="40px"></a>
        
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                  <span class="navbar-toggler-icon"></span>
              </button>
                  <div class="collapse navbar-collapse" id="navbarSite">
        
                      <ul class="navbar-nav mr-auto">
        
                          <li class="nav-item">
                              <a class="nav-link" href="#" data-toggle="modal" data-target="#siteModal">Entrar</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#siteModal1">Cadastrar-se</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Empresas</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Entre em contato</a>
                          </li>
        
                      </ul>
        
        
        
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Redes Sociais</a>                   
                          <div class="dropdown-menu navbar-dark bg-primary">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Intagram</a>
                            <a class="dropdown-item" href="#">WhatsApp</a>
                          </div>
                        </li>
                      </ul>
        
                      
        
                      
                  </div>
                </div>
        </nav>
        <?php
  include("home.php");
        ?>
    <script src="bts/node_modules/jquery/dist/jquery.js"></script>
    <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>