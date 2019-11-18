<?php
require "./validar.php";
?>

<!doctype html>
<html lang="pt-br">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/teste1.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">

<title>N.C. Works</title>
</head>
<body class="bg-white">
<!-- <div class="container">
    <div class="row my-5">
        <div class="col-sm-6 col-md-10 mr-auto" id="paiFotoCapa">
            <img src="img/carrossel4.jpg" id="fotoCapa" title="Foto de Capa">
            <img src="img/caio.jpg" id="fotoPerfil" title="Foto de Perfil" class="ml-5">
            <div id="posicaoEditar">
            <button type="button" id="edit" class="btn btn-primary" data-toggle="modal" data-target="#editarPerfilModal">Edital Perfil</button>
            </div>
        <div class="col-12">
            <ul class="navbar-nav">
                <li class="nav-item ml-3" id="nomeEmpresa">Linx </li>
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

Modal Usuario
<div class="modal fade" id="editarPerfilModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">Editar perfil</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                    <div class="form-group">
                        <p>
                            <input class="form-control mr-auto" placeholder="Nome da empresa..." style="border-radius: 10px;">
                        </p>
                    </div>
                    <div class="form-group">
                        <p>
                            <input class="form-control mr-auto" placeholder="Com oque a sua empresa trabalha..." style="border-radius: 10px;">
                        </p>
                    </div>
                    <div class="form-row">
                    <div class="form-group col-4">
                        <p>
                            <input class="form-control mr-auto" placeholder="Cidade..." style="border-radius: 10px;">
                        </p>
                    </div>
                    <div class="form-group col-4">
                        <p>
                            <input class="form-control mr-auto" placeholder="Estado..." style="border-radius: 10px;">
                        </p>
                    </div>
                    <div class="form-group col-4">
                        <p>
                            <input class="form-control mr-auto" placeholder="País..." style="border-radius: 10px;">
                        </p>
                    </div>
                    </div>
                    <div class="form-group">
                        <p>
                            <input class="form-control mr-auto" placeholder="Sua empresa tem um site? Divulgue ele em seu perfil..." style="border-radius: 10px;">
                        </p>
                    </div>
                    <div class="form-group">
                        <p>
                            <input class="form-control mr-auto" placeholder="Coloque um contato para que os usuarios possam tirar duvidas..." style="border-radius: 10px;">
                        </p>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-6">
                            <div class="input-group mb-3 bg-primary" style="border-radius: 10px;">
                                <div class="custom-file bg-primary" style="border-radius: 10px;">
                                <label class="custom-file-label ml-3 mt-2" for="inputGroupFile01">Editar foto de perfil...</label>
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-6">
                            <div class="input-group mb-3 bg-primary" style="border-radius: 10px;">
                                <div class="custom-file bg-primary" style="border-radius: 10px;">
                                <label class="custom-file-label ml-3 mt-2" for="inputGroupFile02">Editar foto de capa...</label>
                                    <input type="file" class="custom-file-input" id="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <textarea style="border-radius: 10px;" class="form-control" placeholder="Coloque aqui informações, ou até mesmo histórias da empresa para que todos os usuarios possam visualizar..." aria-label="With textarea"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-9 mb-3">
                            <button type="submit" title="Editar" class="btn btn-primary col-3" style="border-radius: 10px;"><b>Salvar</b></button>
                            <button type="reset" title="Limpar" class="btn btn-secondary ml-2 col-3" style="border-radius: 10px;">Limpar</button>
                            <a  style="border-radius: 10px;" tabindex="0" class="btn btn-info ml-5 col-2" role="button"
                                data-toggle="popover" data-placement="right" data-trigger="focus"
                                title="Ajuda"
                                data-content="Preencha todos os campos para que o cadastro seja realizado. Caso não for esse o problema entre em contato conosco.">Ajuda</a>
                        </div>
                    </div>                        
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </form>
    </div>
</div> -->
<div class="container">
    <div class="row my-5">
        <div class="col-sm-6 col-md-10 mr-auto" id="paiFotoCapa">
            <img src="img/carrossel4.jpg" id="fotoCapa" title="Foto de Capa">
            <img src="img/caio.jpg" id="fotoPerfil" title="Foto de Perfil" class="ml-5">
            <div id="posicaoEditar">
            <button type="button" id="edit" class="btn btn-primary" data-toggle="modal" data-target="#">Edital Perfil</button>
            </div>
        <div class="col-12">
            <ul class="navbar-nav">
                <li class="nav-item ml-3" id="nomePessoa"> </li>
                <li class="nav-item text-muted ml-3" id=""> </li>
                <li class="nav-item ml-3"> </li>
            </ul>
        </div>
        </div>
    </div>
</div>




<script src="bts/node_modules/jquery/dist/jquery.js"></script>
<script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>

<script>
$(function (){
        $('[data-toggle="popover"]').popover()
});
</script>

</body>
</html>