<!doctype html>
<html lang="pt-br">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">

    <!--Estilo dos buttons-->
    <style type="text/css">
        #btnFace {
            color: #3b5998;
            background-color: #ffffff;
        }

        #btnFace:hover {
            color: #ffffff;
            background-color: #3b5998;
        }

        #btnInsta {
            color: purple;
            background-color: white;
        }

        #btnInsta:hover {
            color: yellow;
            background-color: purple;
        }

        #btnTt {
            color: rgba(29, 161, 242, 1.00);
            background-color: white;
        }

        #btnTt:hover {
            color: white;
            background-color: rgba(29, 161, 242, 1.00);
        }
    </style>

    <title>N.C. Works</title>
</head>

<body class="bg-light">
<b>
    <p class="text-center my-3">Bem-vindos ao N.C. Works, e boa sorte na procura de um emprego ou funcionário!</p>
</b>

<div class="container col-12">
<center>
<div id="slideSite" class="carousel slide col-7" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#slideSite" data-slide-to="0" class="active"></li>
        <li data-target="#slideSite" data-slide-to="1"></li>
        <li data-target="#slideSite" data-slide-to="2"></li>
        <li data-target="#slideSite" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">

        <div class="carousel-item active">
            <img src="img/carrossel1.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Taxa de desemprego é reduzida em 3%.</h3>
                <p>Afirmam sites de fontes confiaveis.</p>
            </div>

        </div>

        <div class="carousel-item">
            <img src="img/carrossel2.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Globo sofre ataque de crackers</h3>
                <p>Roubo de dados para venda no mercado negro.</p>
            </div>

        </div>

        <div class="carousel-item">
            <img src="img/carrossel3.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Desenvolvedores de php</h3>
                <p>Tem mais oportunidades no mercado de trabalho.</p>
            </div>

        </div>

        <div class="carousel-item">
            <img src="img/carrossel4.jpg" class="img-fluid d-block">

            <div class="carousel-caption d-none d-md-block">
                <h3>Linx contrata 1.000 funcionários.</h3>
                <p>Utilizando o N.C. Works pra o Brasil inteiro.</p>
            </div>

        </div>

    </div>
    
    <a class="carousel-control-prev" href="#slideSite" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="sr-only">Anterior</span>
    </a>

    <a class="carousel-control-next" href="#slideSite" role="button" data-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="sr-only">Próximo</span>
    </a>
</center>
</div>
</div>
<?php 

if(!isset($_SESSION["login"])){
    echo "
    <br>
        <center>
            <div id='alerta' class='alert alert-primary'>
            <span class='h3' style='color:black'>Ainda não é cadastrado? </span><a class='badge badge-secondary' href='#' data-toggle='modal' data-target='#siteModal1'><span class='h4'>Cadastrar</span></a>
            <p class='h3' style='color:black'>ou</p>
            <span class='h3' style='color:black'>Já tem cadastro? </span><a class='badge badge-success' href='#' data-toggle='modal' data-target='#siteModal'><span class='h4'>Login</span></a>
            </div>
        </center>
        ";
}

?>
<!--Cards-->
<h3 class="text-center my-4">O N.C. Works oferece à você:</h3>
<div class="container-fluid row justify-content-sm-center my-5 ml-1">
        <div class="col-sm-6 col-md-3">
            <div class="card mb-3 bg-primary">
                <div class="card-body">
                    <p><h2 class="card-title text-center">Vagas</h2></p>
                    <p><h4 class="card-subtitle mb-2 text-center">Totalmente grátis</h4></p>
                    <b><p class="card-text text-center">Para você ter melhor visibilidade e simplicidade para a visualização de vagas perto de você.</p></b><br>
                </div>
            </div>
        </div>
    <div class="col-sm-6 col-md-3">
        <div class="card mb-3 bg-primary">
            <div class="card-body">
                <p><h2 class="card-title text-center">Qualidade</h2></p>
                <p><h4 class="card-subtitle mb-2 text-center">Melhores perfis para vaga</h4></p>
                <b><p class="card-text text-center">Seus candidatos irão mostrar os melhores perfis para cada vaga deviado à nossa base de dados bem estruturada.</p></b>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card mb-3 bg-primary">
            <div class="card-body">
                <p><h2 class="card-title text-center">Confiabilidade</h2></p>
                <p><h4 class="card-subtitle mb-2 text-center">Dados seguros</h4></p>
                <b><p class="card-text text-center">Seus dados estarão sempre seguros, pois utilizamos as tecnologias de segurança mais recentes.</p></b><br>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card mb-3 bg-primary">
            <div class="card-body">
                <p><h2 class="card-title text-center">Suporte</h2></p>
                <p><h4 class="card-subtitle mb-2 text-center">Facilidade e agilidade</h4></p>
                <b><p class="card-text text-center">Caso tenha dúvidas ou problemas durante o uso do site, nosso suporte irá o atender com a maior rapidez para lhe auxiliar.</p></b>
            </div>
        </div>
    </div>
</div>
</div>

<center>
    <div class='d-sm-none d-md-none'>
        <span style='font-size:18px'>Toque no icone</span>&nbsp
        <img src='./img/collapse_1342267.png' height='25px' weight='25px'></img>&nbsp
        <span style='font-size:18px'>no topo do site para acessar o menu</span>
    </div>
</center>

<!--Rodapé-->
<div class="container">
        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>

            <div class="col-sm-4">
                <h3>NC_Works</h3>
                <p>
                    É uma empresa dedicada a atender as necessidades dos clientes e das empresas que estão a procura de
                    emprego ou funcionário, por isso damos o nosso melhor para que o site evolua com a ajuda de nossos
                    clientes e colaboradores. Qualquer dúvida entre em contato conosco pelas nossas redes sociais.
                    Agradecemos desde já!
                </p>
            </div>

            <div class="col-sm-4">
                <h3>Menu</h3>
                <div class="list-group text-center">
                    <a href="index.php?action=perfil" class="list-group-item list-group-item-action list-group-item-primary">Perfil</a>
                    <a href="index.php?action=pesquisar_vaga" class="list-group-item list-group-item-action list-group-item-primary">Pesquisar Vagas</a>
                    <?php 
                    if(isset($_SESSION["tipo"]) && $_SESSION["tipo"] == "empresa"){
                        echo "<a href='index.php?action=cadastrar_vaga' class='list-group-item list-group-item-action list-group-item-primary'>Cadastrar Vagas</a>";
                    }
                    ?>
                    <a href="index.php?action=contato" class="list-group-item list-group-item-action list-group-item-primary">Contato</a>
                </div>
            </div>

            <div class="col-sm-4">
                <h3>Social</h3>
                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a class="btn btn-outline-info" id="btnFace" href="#">Facebook</a>
                    <a class="btn btn-outline-info" id="btnTt" href="#">Twitter</a>
                    <a class="btn btn-outline-info" id="btnInsta" href="#">Instagram</a>
                </div>
            </div>

            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">
                        O sucesso não é garantido, mas o fracasso é certo se você não estiver emocinalmente envolvido em
                        seu trabalho.
                    </p>
                    <footer class="blockquote-footer">Biz Stone<cite title="Titulo"> Fundador do Twitter</cite></footer>
                </blockquote>
            </div>
        </div>
</div>

<!--Modal Usuario-->
<div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center my-5">
                                <h1 class="display-4">Entrar</h1>
                            </div>
                        </div>
                        <div class="row justify-content-center mb-5">
                            <div class="col-sm-12 col-md-10 col-lg-8">
                                <form name="frmCadastro" method="post" action="login.php">
                                    <div class="form-row">

                                        <div class="form-group col-sm-7">
                                            <h5 for="inputNome">Login</h5>
                                            <input type="email" class="form-control" id="inputNome" name="login"
                                                placeholder="Digite seu email..." required>
                                        </div>

                                        <div class="form-group col-sm-7">
                                            <h5 for="inputSobrenome">Senha</h5>
                                            <input type="password" class="form-control" id="inputSobrenome" name="senha"
                                                placeholder="Digite sua senha..." required>
                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Entrar</button>
                                            <button type="reset" class="btn btn-secondary ml-2">Limpar</button>
                                            <a tabindex="0" class="btn btn-info ml-5" role="button"
                                                data-toggle="popover" data-placement="right" data-trigger="focus"
                                                title="Ajuda"
                                                data-content="Preencha todos os campos para que o cadastro seja realizado. Caso não for esse o problema entre em contato conosco.">Ajuda</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                </div>

            </div>
        </div>
</div>

<!--Modal Cadastro-->
<div class="modal fade" id="siteModal1" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Cadastro</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <!--Cadastros-->
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center my-5">
                                <h1 class="display-4">Cadastrar-se</h1>
                            </div>
                        </div>

                        <div class="row justify-content-center mb-5">
                            <div class="col-sm-12 col-md-10 col-lg-8">
                                <form name="frmCadastro" method="post" action="cadastro.php">
                                    <div class="form-row">

                                        <div class="form-group col-sm-8">
                                            <label for="inputNome">Usuário</label>
                                            <input type="text" class="form-control" id="inputNome" name="usuario" require
                                                placeholder="Digite seu nome de usuário...">
                                                
                                        </div>
                                        <div class="form-group col-sm-8">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control" id="inputEmail" name="email" require
                                                placeholder="Digite seu email...">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-8">
                                            <label for="inputSenha">Senha</label>
                                            <input type="password" class="form-control" id="inputSenha" name="senha" require
                                                placeholder="Digite sua senha..." required>
                                                <small id="passwordHelpInline" class="text-muted">
                                                De 6 à 25 caracteres: letras, números e especiais (. _ -)
                                                </small>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-sm-8">
                                            <label for="inputConfSenha">Confimar Senha</label>
                                            <input type="password" class="form-control" id="inputConfSenha" name="confSenha" require
                                                placeholder="Confirme sua senha...">
                                        </div>
                                    </div>

                                    <!-- <div class="form-row">
                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">Jurídico
                                </label>
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">Fisíco
                                </label>
                            </div>
                        </div>
                    </div> -->
                                    <div class="form-row">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Enviar</button>
                                            <button type="reset" class="btn btn-secondary ml-2">Limpar</button>
                                            <a tabindex="0" class="btn btn-info ml-2" role="button"
                                                data-toggle="popover" data-placement="right" data-trigger="focus"
                                                title="Ajuda"
                                                data-content="Preencha todos os campos para que o cadastro seja realizado. Caso não for esse o problema entre em contato conosco.">Ajuda</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
</div>
</body>

</html>