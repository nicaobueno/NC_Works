<?php
require("validar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <title>Cadastro de Vagas</title>
</head>
<body class="bg-light">
<div class="container-fluid">
    <img src="./img/cadastro_vagas.png" class="rounded mx-auto d-block" height="25%" width="25%"></br></br></br>
    <div>
    <!-- class="d-flex justify-content-center" -->
    <form method="POST" action="">
    <span class="d-flex justify-content-around"><h4>Preencha todos os campos:</h4></span>
        <table class="table d-table table-borderless table-hover table-active">
            <!-- <thead class="thead-dark">
                <tr>
                    <th>Cadastro</th>
                    <th></th>
                </tr>
            </thead> -->
            <tbody>
                <tr>
                    <td>Profissão:</td>
                    <td>
                        <select required name="profissao">
                            <option value="volvo"></option>
                            <option value="saab">Saab</option>
                            <option value="mercedes">Mercedes</option>
                            <option value="audi">Audi</option>
                        </select>
                    </td>
                    <tr><td>Título:</td><td><input required type="text" name="titulo"></td></tr>
                    <tr><td>Descrição:</td><td><input required type="textbox" name="descricao"></td></tr>
                </tr>
                <tr>
                    <tr><td>Requisitos:</td><td><input required type="text" name="requisitos"></td></tr>
                    <tr><td>Função:</td><td><input required type="text" name="funcao"></td></tr>
                    <tr><td>Salário:</td><td><input required type="text" name="salario"></td></tr>
                </tr>
                <tr>
                    <tr><td>Indústria:</td><td><input required type="text" name="industria"></td></tr>
                    <tr><td>Categoria:</td><td><input required type="text" name="categoria"></td></tr>
                    <tr><td>Período:</td><td><input required type="text" name="periodo"></td></tr>
                </tr>
                <tr>
                    <tr><td>Data Inicio:</td><td><input required type="date" name="inicio"></td></tr>
                    <tr><td>Data Fim:</td><td><input required type="date" name="fim"></td></tr>
                    <tr><td>Ativo:</td><td><input type="radio" name="ativo"></td></tr>
                    <tr><td>Confidencial:</td><td><input type="radio" name="confidencial"></td></tr>
                </tr>
        </table>
        <div class="d-flex justify-content-around">
            <input class="btn btn-success" type="submit" name="submit" value="Enviar">
            <input class="btn btn-secondary" type="reset" name="reset" value="Limpar">
        </div>
    </form>
    </div>
</div>
<?php

    if(isset($_POST["submit"])){
        
        require "./includes/conexao.php";

        $profissao = $_POST["profissao"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $requisitos = $_POST["requisitos"];
        $funcao = $_POST["funcao"];
        $salario = $_POST["salario"];
        $industria = $_POST["industria"];
        $categoria = $_POST["categoria"];
        $periodo = $_POST["periodo"];
        $dt_inicio = $_POST["inicio"];
        $dt_fim = $_POST["fim"];
        $ativo = $_POST["ativo"];
        $confidencial = $_POST["confidencial"];

        if(empty($profissao) || empty($titulo) || empty($descricao) || empty($requisitos) || empty($funcao) || 
        empty($salario) || empty($industria) || empty($categoria) || empty($periodo) || empty($dt_inicio) || empty($dt_fim)){
            echo "<script>alert('Preencha todos os campos')</script>";
            exit;
        }else{
            $sql = "INSERT INTO tb_vagas VALUES ('$profissao', '$titulo', '$descricao', '$requisitos', '$funcao', '$salario', '$industria', '$categoria', '$periodo', '$dt_inicio', '$dt_fim', '$ativo', '$confidencial')";
            if (!$link) {
                //header("../cadastro.php?error=sqlerror");
                mysqli_connect_error();
                exit;
            } else {
                mysqli_query($link, $sql) or die("<script>alert('Não foi possível Inserir!')</script>");
                echo "<script>alert('Dados inseridos com sucesso!')</script>";
            }
        }
    }
?>
    <script src="bts/node_modules/jquery/dist/jquery.js"></script>
    <script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>