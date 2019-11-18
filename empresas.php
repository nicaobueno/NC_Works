<?php
require "./validar.php";
?>

<!doctype html>
<html lang="pt-br">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/xc.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">

<title>N.C. Works</title>
</head>
<body>
<div class="container">
<div id="input_capa">

<form action="uploadFotoDeCapa.php" method="POST" enctype="multipart/form-data">
    <input type="file" id="input_img" name="arquivo">
    <img src="img/editar.png" id="editar" width="25px" height="25px">
    <input type="submit" value="Ok" name="enviar" class="btn-secondary" id="confirmar">
</form>
</div>
<div id="editarFotoPerfil">
    <form action="uploadFotoDePerfil.php" method="POST" enctype="multipart/form-data">
        <input type="file" id="editarFotoPer" name="arquivo">
        <img src="img/editar.png" id="editar" width="25px" height="25px">
        <input type="submit" value="Ok" name="enviar" class="btn-secondary" id="confirmar">
    </form>
</div>
    <div id="caixa">
        <div>
            <div id="capa">
                <img src="img/carrossel2.jpg" id="fotoCapa" title="Foto de Capa">
            </div>
        </div>
        <div class="col-12">
            <div id="foto">
                <img src="img/apertomao.jpg" id="fotoPerfil" title="Foto de Perfil">
            </div>
        </div>
        <div id="colunaText">
            <div id="caixaTexto">
                <div id="texto">
                    <ul class="navbar-nav">
                        <li class="nav-item ml-3" id="nomeEmpresa">Linx
                        
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Editar
                            </button>
                            </p>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                    <input type="text"><input type="submit" value="ok">
                                </div>                                    
                            </div>
                        
                        </li>
                        <li class="nav-item text-muted ml-3" id="tipoEmpresa">Sistemas de Farmácia</li>
                        <li class="nav-item ml-3">Bebedouro, São Paulo, Brasil</li>
                        <li class="nav-item ml-3 my-1"><a href="https://www.facebook.com" target="blank"><b>Contatos</b></a></li>
                        <li class="nav-item ml-3"><a class="btn btn-outline-primary" href="https://www.facebook.com">Visite o Site</a></li>
                        <li class="nav-item ml-3 my-2"><a class="btn btn-outline-primary" href="https://www.facebook.com">Contatos</a></li>
                    </ul>
                </div>
            </div>
        </div>
</div>
    <div id="propaganda">
        <img src="img/vagasdeempregos.jpg" id="patrocinador">
    </div>
    <div class="text-center" id="textoSobre">
        <h1 class="display-4">Sobre</h1>
        <hr>
        <p class="lead">
            A nossa empresa está disposta a 
        </p>
    </div>
</div>




































</body>
</html>