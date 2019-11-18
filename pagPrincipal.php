<?php 
    require_once "validar.php";
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/teste1.css">
    <title>Hello, world!</title>
  </head>
  <body>    
<?php 
require_once "includes/conexao.php";
if(isset($_SESSION["tipo"])){
    $tipo = $_SESSION["tipo"];
}
if($tipo == "empresa"){
    $sql = mysqli_query($link, "SELECT * FROM tb_empresa");
    $array = mysqli_fetch_array($sql);
    if(!$sql || mysqli_num_rows($sql) <= 0){
        $sql = mysqli_query($link, "SELECT * FROM tb_uf ");
    
        echo "
        <div>
        //imagem cadastro de perfils
        </div>
        <div class='container'>
            <div class='row justify-content-center mb-5'>
                <div class='col-sm-12 col-md-10 col-lg-8'>
                    <form method='POST' action=''>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Nome da Empresa</b></p>
                                <input type='text' maxlength='250' placeholder='Campo obrigatório' class='form-control mr-auto' name='nomeEmpresa'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>CNPJ</b></p>
                                <input type='text' maxlength='14' placeholder='Campo obrigatório' class='form-control mr-auto' name='CNPJ'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>CEP</b></p>
                                <input type='text' maxlength='8' placeholder='Campo obrigatório' class='form-control mr-auto' name='CEP'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>País</b></p>
                                <input type='text' maxlength='30' placeholder='Campo obrigatório' class='form-control mr-auto' name='pais'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Selecione o seu estado (<label class='text-muted'>Obrigatório</label>)</b></p>
                                <select class='form-control col-2' name='ufs'>
                                <option></option>";
                                while($_UF = mysqli_fetch_array($sql)){
                                    $id_uf = $_UF['id_uf'];
                                    $uf = $_UF['uf'];
                                    echo "
                                        <option value='$id_uf'>$uf</option>
                                    ";
                                }
                                    echo "
                                </select>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Cidade</b></p>
                                <input type='text' placeholder='Campo obrigatório' class='form-control mr-auto' name='cidade'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Bairro</b></p>
                                <input type='text' placeholder='Campo obrigatório' class='form-control mr-auto' name='bairro'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Rua</b></p>
                                <input type='text' placeholder='Campo obrigatório' class='form-control mr-auto' name='rua'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Email</b></p>
                                <input type='text' placeholder='Campo obrigatório' class='form-control mr-auto' name='email'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Site da empresa</b></p>
                                <input type='text' class='form-control mr-auto' name='siteEmpresa'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Contatos da empresa</b></p>
                                <input type='text' class='form-control mr-auto' name='contato'>
                            </div>
                        </div>
                        <div class='form-row'>
                            <div class='form-group col'>
                                <p><b>Sobre a sua empresa</b></p>
                                <input type='text' class='form-control mr-auto' name='sobre'>
                            </div>
                        </div>
                        <button type='submit' name='enviar' class='btn btn-primary col-2'>
                            Salvar
                        </button>
                        <button type='reset' class='btn btn-danger col-2 ml-5'>
                            Limpar
                        </button>
                    </form>
                </div>
            </div>
        </form>
        </div>
        ";
        include("cadastrarPerfilEmpresa.php");
    }else{     
            $idempresa = $_SESSION["nome"];
            $sql = mysqli_query($link, "SELECT * FROM tb_empresa WHERE id_empresa ='$idempresa'");
            $empresa = mysqli_fetch_array($sql);
            $name = $_SESSION["nome"];


            $code = "SELECT * FROM tb_empresa";
            $conn = mysqli_query($link,$code);
                while($v = mysqli_fetch_array($conn)){
                $nome = $v["nome_empresa"];
                $sobre = $v["tipoempresa"];
                $pais = $v["pais"];
                $estado = $v["uf"];
                $cidade = $v["cidade"];
                $sitedaempresa = $v["siteEmpresa"];
                $contatoempresa = $v["contatoEmpresa"];
                $sobreempresa = $v["sobreEmpresa"];



            echo '<div class="container">
            <div class="row my-5">
                <div class="col-sm-6 col-md-10 mr-auto" id="paiFotoCapa">
                    <img src="img/carrossel4.jpg" id="fotoCapa" title="Foto de Capa">
                    <img src="img/caio.jpg" id="fotoPerfil" title="Foto de Perfil" class="ml-5">
                    <div id="posicaoEditar">
                    <button type="button" id="edit" class="btn btn-primary" data-toggle="modal" data-target="#editarPerfilModal">Edital Perfil</button>
                    </div>
                <div class="col-12">
                    <ul class="navbar-nav">
                        <li class="nav-item ml-3" id="nomeEmpresa">'.$nome.'</li>
                        <li class="nav-item text-muted ml-3" id="tipoEmpresa">'.$sobre.'</li>
                        <li class="nav-item ml-3">'.$cidade.', '.$estado.', '.$pais.'</li>
                        <li class="nav-item ml-3"><a class="btn btn-outline-primary" href="'.$sitedaempresa.'">Visite o Site</a></li>
                        <li class="nav-item ml-3 my-2"><a class="btn btn-outline-primary" href="'.$contatoempresa.'">Contatos</a></li>
                    </ul>
                </div>
                </div>
                    <div class="col-sm-6 col-md-10 my-5" style="box-shadow: 0px 3px 10px gray;">
                        <p class="my-3"><b>Sobre</b></p>
                        <p>Nenhum dado disponivel.</p>
                    </div>
            </div>
        </div>
        
        <!--Modal Usuario-->
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
                                    <input class="form-control mr-auto" value="'.$nome.'" placeholder="Nome da empresa..." style="border-radius: 10px;">
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    <input class="form-control mr-auto" value="'.$sobre.'" placeholder="Com oque a sua empresa trabalha..." style="border-radius: 10px;">
                                </p>
                            </div>
                            <div class="form-row">
                            <div class="form-group col-4">
                                <p>
                                    <input class="form-control mr-auto" value="'.$cidade.'" placeholder="Cidade..." style="border-radius: 10px;">
                                </p>
                            </div>
                            <div class="form-group col-4">
                                <p>
                                    <input class="form-control mr-auto" value="'.$estado.'" placeholder="Estado..." style="border-radius: 10px;">
                                </p>
                            </div>
                            <div class="form-group col-4">
                                <p>
                                    <input class="form-control mr-auto" value="'.$pais.'" placeholder="País..." style="border-radius: 10px;">
                                </p>
                            </div>
                            </div>
                            <div class="form-group">
                                <p>
                                    <input class="form-control mr-auto" value="'.$sitedaempresa.'" placeholder="Sua empresa tem um site? Divulgue ele em seu perfil..." style="border-radius: 10px;">
                                </p>
                            </div>
                            <div class="form-group">
                                <p>
                                    <input class="form-control mr-auto" value="'.$contatoempresa.'" placeholder="Coloque um contato para que os usuarios possam tirar duvidas..." style="border-radius: 10px;">
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
                                    <textarea style="border-radius: 10px;" class="form-control" value="'.$sobreempresa.'" placeholder="Coloque aqui informações, ou até mesmo histórias da empresa para que todos os usuarios possam visualizar..." aria-label="With textarea"></textarea>
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
        </div>';
        }
    }
}elseif ($tipo == "pessoa") {
    if($tipo == "pessoa"){
        $sql = mysqli_query($link, "SELECT * FROM tb_pessoa");
        $array = mysqli_fetch_array($sql);
        if(!$sql || mysqli_num_rows($sql) <= 0){
            $sql = mysqli_query($link, "SELECT * FROM tb_uf ");
        echo "
        <div class='container'>
        <div class='row justify-content-center mb-5'>
            <div class='col-sm-12 col-md-10 col-lg-8'>
                <form method='POST' action=''>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>Nome:</b></p>
                            <input type='text' class='form-control mr-auto'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <font size='11'>
                                <p><b>CPF:</b></p>
                                <input type='text' class='form-control mr-auto'>
                            </font>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>Data de nascimento:</b></p>
                            <input type='date' class='form-control mr-auto'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>Selecione o seu estado</b></p>
                            <select class='form-control col-2'>
                            <option></option>";
                            while($_UF = mysqli_fetch_array($sql)){
                                $id_uf = $_UF['id_uf'];
                                $uf = $_UF['uf'];
                                echo "
                                    <option value='$id_uf'>$uf</option>
                                ";
                            }
                                echo "
                            </select>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>Cidade</b></p>
                            <input type='text' class='form-control mr-auto'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>País</b></p>
                            <input type='text' class='form-control mr-auto'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>Rua</b></p>
                            <input type='text' class='form-control mr-auto'>
                        </div>
                    </div>
                    <div class='form-row'>
                        <div class='form-group col'>
                            <p><b>Email</b></p>
                            <input type='text' class='form-control mr-auto'>
                        </div>
                    </div>
                    <button type='submit' class='btn btn-primary col-2'>
                        Salvar
                    </button>
                    <button type='reset' class='btn btn-danger col-2 ml-5'>
                        Limpar
                    </button>
                </form>
            </div>
        </div>
    </form>
    </div>
        ";
}
}
}

















































?>
  </body>
</html>