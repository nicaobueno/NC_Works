<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilo2.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    <title>Detalhes</title>
    <style>
        a:link {
        color: blue;
        background-color: transparent;
        text-decoration: none;
        };

        a:visited {
        color: #d79cff;
        background-color: transparent;
        text-decoration: none;
        };

        a:hover {
        color: black;
        background-color: transparent;
        text-decoration: underline;
        };

        a:active {
        color: pink;
        background-color: transparent;
        text-decoration: underline;
        };
    </style>
</head>

<body class='bg-light'>
    <?php

    if (isset($_GET["id"])) {
        require_once "./includes/conexao.php";
        $id = $_GET["id"];
        
        //conta 1 vizualização
        $query = mysqli_query($link, "INSERT INTO tb_vizualizacoes (id_vaga) VALUES ($id)") or die(mysqli_error($link));
        $query = mysqli_query($link, "SELECT COUNT(id_views) AS views, id_vaga FROM tb_vizualizacoes WHERE id_vaga=$id") or die(mysqli_error($link));
        while ($a = mysqli_fetch_array($query)) {
            $views = $a["views"];
            $id_vaga = $a["id_vaga"];
            $query = mysqli_query($link, "UPDATE `tb_vaga` AS v SET `vizualizacoes` = $views WHERE v.id_vaga = $id_vaga") or die(mysqli_error($link));    
        }
        
        //seleciona os dados da vaga
        $sql = "SELECT * FROM tb_vaga AS v INNER JOIN tb_profissao AS p ON v.id_profissao = p.id_profissao INNER JOIN tb_empresa AS e ON v.id_empresa = e.id_empresa WHERE v.id_vaga = $id";
        $r = mysqli_query($link, $sql) or die(mysqli_error($link));
        while($a = mysqli_fetch_array($r)){
            $profissao = $a["profissao"];
            $id_profissao = $a["id_profissao"];
            $titulo = $a["titulo"];
            $salario = $a["salario"];
            $descricao = $a["descricao"];
            $confidencial = $a["confidencial"];
            $jornada = $a["jornada"];
            $contrato = $a["contrato"];
            $empresa = $a["nome_empresa"];
            $localidade = $a["localidade"];
            $id_user = $a["id_usuario"];
            
            echo "
            <div class='container'>
                <div class='d-block' style='box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.3);margin-top:20px' name='cabecalho'>
                    <div class='container'>
                        <br />
                        <span><h3>$titulo</h3></span>
                        <span><b>Salário: </b></span>
                        ";
                        if($confidencial == 0){
                            echo $salario;
                        }else{
                            echo 'à combinar.';
                        }
                        echo "
                        
                        <span>/ <i>$contrato</i></span>

                        <div class='float-lg-right d-flex align-items-center' style='padding-top:10px'>
                            <span><button style='width:350px;height:50px' class='btn btn-success'>Candidatar-se</button></span>
                        </div>

                        <div style='padding-top:10px'>
                            <img src='img/iconelinx.jfif' height='35px' width='35px'>&nbsp
                            <span><a class='btn' href='?action=perfil&user=$id_user'>$empresa</a></span>
                        </div>   
                    </div>
                    <br />
            </div>
                <br />

                <div class='d-block d-lg-flex' id='' name='corpo'>
                    <div class='d-block container' style='box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.3)'>
                        <br />
                        <h5>Descrição</h5>
                        //valor real <br />
                        $descricao <br /> <br />
                        //exemplo <br />
                        <ul class='descriptionItems'>
                            <li>Área e especialização profissional: Informática, TI, Telecomunicações - Programador / Desenvolvedor</li>
                            <li>Nível hierárquico: Analista</li>
                            <li>Local de trabalho: São Paulo, SP</li>
                            <li>Descrição :</li>
                            <li>Python</li>
                            <li>JavaScript</li>
                            <li>Blip</li>
                            <li>Técnicas Obrigatórias: python, django, oop, blip, watsom</li>    
                        </ul>
                        <br />
                    </div>
                    <div style='padding-left:20px'></div>
                    <div class='d-block column container' style='box-shadow: 0 4px 10px 0 rgba(0, 0, 0, 0.3)'>
                        <br />
                        <span><b>Titulo da vaga</b></span>
                        <br />
                        <span>$titulo</span>
                        <br />
                        <br />
                        <span><b>Empresa</b></span>
                        <br />
                        <span><a href='?action=perfil&user=$id_user'>$empresa</a></span>
                        <br />
                        <br />
                        <span><b>Jornada</b></span>
                        <br />
                        <span>$jornada</span>
                        <br />
                        <br />
                        <span><b>Tipo de Contrato</b></span>
                        <br />
                        <span>$contrato</span>
                        <br />
                        <br />
                        <span><b>Salário</b></span>
                        <br />
                        <span>";
                        if($confidencial == 0){
                            echo $salario;
                        }else{
                            echo 'à combinar.';
                        }
                        echo "
                        </span>
                        <br />
                        <br />
                        <span><b>Localidade</b></span>
                        <br />
                        <span>$localidade</span>
                        <br />
                        <br />
                        <center>
                        <div>
                            <span><button style='width:350px;height:50px' class='btn btn-success'>Candidatar-se</button></span>
                        </div>
                        </center>
                        <br />
                    </div>
                </div>
                <br/>
            </div>
            <br />
        </div>
            ";
        }
    }else{
        echo "<center><span class='h4 text-danger'>Selecione uma vaga!</span></center>";
    }
    
    ?>
</body>

</html>