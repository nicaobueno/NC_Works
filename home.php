<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilo2.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilobt/node_modules/bootstrap/compiler/bootstrap.css"/>

    <title>N.C. WORKS</title>
  </head>
  <body>
    <?php
    if(isset($_SESSION["nome"])){
        $usuario = $_SESSION["nome"];
        echo "<h3>Bem-Vindo $usuario</h3>";
        echo "<a href='sair.php'><button>Sair</button></a>";
    }
    ?>
    <!--Slider-->
    <div id="carouselSite" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>
        </ol>
        
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/carrossel1.jpg" class="img-fluid d-block" width="100%">

                <div class="carousel-caption d-none d-md-block">
                    <h1>Empresas de Tecnologias</h1>
                    <p class="lead">Cerca de 70% das empresas precisam de profissionais qualificados</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carrossel2.jpg" class="img-fluid d-block" width="100%">

                <div class="carousel-caption d-none d-md-block">

                    <h1>N.C. WORKS, ajudando empresas e profissionais</h1>
                    <p class="lead">Desde 2019 ajudando as empresas a empregar profissionais qualificados</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carrossel3.jpg" class="img-fluid d-block" width="100%">

                <div class="carousel-caption d-none d-md-block">

                    <h1>Taxa de Desemprego baixa com o lançamento do site</h1>
                    <p class="lead">2 de setembro de 2019</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carrossel4.jpg" class="img-fluid d-block" width="100%">
                
                <div class="carousel-caption d-none d-md-block">
                    <h1>Cresça na área de tecnologia</h1>
                    <p class="lead"s>Venha ser um programador de sucesso!</p>
                </div>
            </div>
        
        </div>

        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev"> 
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>

        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next"> 
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Próximo</span>
        </a>

    </div>
    <!--scroll-Text-->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="display-3">Seja bem-vindo ao N.C. WORKS</h1>
                <p>Seu futuro emprego ou funcionário é aqui!</p>
            </div>
        </div>

        <div class="row mb-5">

            <div class="col-3">

                <nav id="navbarVertical" class="navbar navbar-light bg-dark">

                    <nav class="nav nav-pills flex-column">

                        <a class="nav-link" href="#item1">Texto chato</a>

                        <nav class="nav nav-pills flex-column">
                            <a class="nav-link ml-3" href="#item1-1">Caio Lindo</a>
                            <a class="nav-link ml-3" href="#item1-2">hack</a>
                        </nav>

                        <a class="nav-link my-2" href="#item2">lindo</a>
                        <a class="nav-link my-2" href="#item3">jhenny</a>

                        <nav class="nav nav-pills flex-column">
                                <a class="nav-link ml-3" href="#item3-1">asdas</a>
                                <a class="nav-link ml-3" href="#item3-2">hasdasdaack</a>
                        </nav>

                    </nav>
                </nav>
            </div>

            <div class="col-9">

                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollspySite">
                    <h4 id="item1">Texto chato</h4>
                    <p>O(A) caioooo conecta funcionários e empre
                    gadores com interesses comuns desde 2000. Se você precisa
                    contratar ou se está procurando uma vaga em São Paulo ,
                    somos a agência certa para você. Entre em contato conosco para</p>

                    <h5 id="item1-1">Caio Lindo</h5>
                    <p> turbinar sua carreira em qualquer mercado ou para
                    encontrar os melhores funcionários para sua empresa.
                    Conheça nossos serviços diferenciados agora.</p>

                    <h5 id="item1-2">hack</h5>
                    <p>Quem está à procura de emprego ou
                    precisa contratar um novo funcionário
                    para sua empresa sabe que 
                    o mercado de trabalho pode ser complicado.</p>

                    <h4 id="item2">lindo</h4>
                    <p>O(A) caioooo conecta funcionários e empre
                    gadores com interesses comuns desde 2000. Se você precisa
                    contratar ou se está procurando uma vaga em São Paulo ,
                    somos a agência certa para você. Entre em contato conosco para</p>

                    <h4 id="item3">selecoasasdadadasdadadasasdas</h4>
                    <p>O(A) caioooo conecta funcionários e empre
                    gadores com interesses comuns desde 2000. Se você precisa
                    contratar ou se está procurando uma vaga em São Paulo ,
                    somos a agência certa para você. Entre em contato conosco para</p>

                    <h5 id="item3-1">caio ama jhenny pos</h5>
                    <p> turbinar sua carreira em qualquer mercado ou para
                    encontrar os melhores funcionários para sua empresa.
                    Conheça nossos serviços diferenciados agora.</p>

                    <h5 id="item3-2">ela é muita linda</h5>
                    <p>Quem está à procura de emprego ou
                    precisa contratar um novo funcionário
                    para sua empresa sabe que 
                    o mercado de trabalho pode ser complicado.</p>
                </div>
    
            </div>

        </div>

<div class="row">
        <div class="col-sm-4">
            <div class="card">
                <img class="img-card-top" src="img/N.C. WORKS.png">
                <div class="card-body">
                    <h4 class="card-title">Hardcori</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Jhenny linda</h6> 
                    <p class="card-text">N.C. WORKS o tcc mais vida louca que existe, eu to fazendo sozinho</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Salario: 3000</li>
                    <li class="list-group-item">Salario: 5000000</li>
                    <li class="list-group-item">Salario: 2</li>
                </ul>
                <div class="card-body">
                <a href="#" class="card-link">Entrar</a>
                <a href="#" class="card-link">Candidatar-se</a>
                </div>
                <div class="card-footer text-muted">
                    linx
                </div>
            </div>
        </div>
    <div class="col-sm-4">
        <div class="card">
            <img class="img-card-top" src="img/N.C. WORKS.png">
            <div class="card-body">
                <h4 class="card-title">Hardcori</h4>
                <h6 class="card-subtitle mb-2 text-muted">Jhenny linda</h6> 
                <p class="card-text">N.C. WORKS o tcc mais vida louca que existe, eu to fazendo sozinho</p>
            </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Salario: 3000</li>
                    <li class="list-group-item">Salario: 5000000</li>
                    <li class="list-group-item">Salario: 2</li>
                </ul>
                <div class="card-body">
                <a href="#" class="card-link">Entrar</a>
                <a href="#" class="card-link">Candidatar-se</a>
                </div>
                <div class="card-footer text-muted">
                    linx
                </div>
        </div>
    </div>
    <div class="col-sm-4">
            <div class="card">
            <img class="img-card-top" src="img/N.C. WORKS.png">
            <div class="card-body">
                <h4 class="card-title">Hardcori</h4>
                <h6 class="card-subtitle mb-2 text-muted">Jhenny linda</h6> 
                <p class="card-text">N.C. WORKS o tcc mais vida louca que existe, eu to fazendo sozinho</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Salario: 3000</li>
                <li class="list-group-item">Salario: 5000000</li>
                <li class="list-group-item">Salario: 2</li>
            </ul>
            <div class="card-body">
            <a href="#" class="card-link">Entrar</a>
            <a href="#" class="card-link">Candidatar-se</a>
            </div>
            <div class="card-footer text-muted">
                linx
            </div>
        </div>
    </div>
</div>

    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="css/estilobt/node_modules/jquery/dist/jquery.js"></script>
    <script src="css/estilobt/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="css/estilobt/node_modules/bootstrap/dist/js/bootstrap.js"></script>
  </body>
</html>