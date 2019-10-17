<?php
require "./validar.php";
if($_SESSION["tipo"] != "empresa"){
    echo "<h1 style='color:red;text-align:center'>Você não ter permissões para acessar essa página</h1>";
    echo "<center><a href='index.php'>Voltar à página inicial</a></center>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png">
    <title>Cadastro de Vagas</title>
</head>
<body class="bg-light">
<center>
    <div class="container align-items-center">
        <img src="./img/cadastro_vagas.png" style="margin-top:20px;width:35%;height:35%" class="rounded mx-auto d-block" ></br></br></br>
        <div>
        <span class="d-flex justify-content-around d-inline-block p-2 bg-dark text-white"><h5>Preencha todos os campos:</h5></span>
        <form method="POST" action="">
            <div class="form-group d-flex">
                <table class="table d-table table-borderless table-hover table-active">
                    <tbody>
                        <tr class="form-group col">
                            <td>Profissão:</td>
                            <td>
                                <select required class="form-control" name="profissao">
                                    <option value="0"></option>
                                    <?php
                                    require_once "./includes/conexao.php";

                                    $result = mysqli_query($link, "SELECT id_profissao, profissao FROM tb_profissao ORDER BY profissao ASC");
                                    while ($array = mysqli_fetch_array($result)) {
                                        echo "<option value='".$array["id_profissao"]."'>".$array["profissao"]."</option>";
                                    }
                                    
                                    ?>
                                </select>
                            </td>
                            <tr class="form-group col"><td>Título:</td><td><input required type="text" class="form-control ml-auto" name="titulo"></td></tr>
                            <tr class="form-group col"><td>Descrição:</td><td><textarea required class="form-control" name="descricao"></textarea></td></tr>
                            <tr class="form-group col"><td>Requisitos:</td><td><textarea required class="form-control" type="text" name="requisitos"></textarea></td></tr>
                            <!-- style="width:500px;height:250px;" -->
                            <tr class="form-group col"><td>Tipo de Contrato:</td><td><input required class="form-control" type="text" name="contrato"></td></tr>
                            <tr class="form-group col"><td>Salário:</td><td><input required class="form-control" type="text" name="salario"></td></tr>
                            <tr class="form-group col"><td>Indústria:</td><td><input required class="form-control" type="text" name="industria"></td></tr>
                            <tr class="form-group col"><td>Jornada:</td><td><input required class="form-control" type="text" name="jornada"></td></tr>
                            <tr class="form-group col"><td>Localidade:</td><td><input required class="form-control" type="text" name="localidade"></td></tr>
                            <tr class="form-group col"><td>Data Inicio:</td><td><input required class="form-control" type="date" name="inicio"></td></tr>
                            <tr class="form-group col"><td>Data Fim:</td><td><input required class="form-control" type="date" name="fim"></td></tr>
                            <tr class="form-group col"><td>Ativa:</td><td><input required type="radio" name="ativo" id="ativo" value="1"></td></tr>
                            <tr class="form-group col"><td>Inativa:</td><td><input required type="radio" name="ativo" id="ativo" value="0"></td></tr>
                            <tr class="form-group col"><td>Público:</td><td><input required type="radio" name="confidencial" id="confidencial" value="0"></td></tr>
                            <tr class="form-group col"><td>Confidencial:</td><td><input required type="radio" name="confidencial" id="confidencial" value="1"></td></tr>
                        </tr>
                    </tbody>
                </table>
            </div>
                <div class="d-flex">
                    <input class="btn btn-success" type="submit" name="submit" value="Enviar">&nbsp
                    <input class="btn btn-secondary" type="reset" name="reset" value="Limpar">&nbsp
                    <a href="index.php"><input class="btn btn-danger" type="button" value="Cancelar"></a>
                </div>
        </form>
        </div>
    </div>
</center>
<?php

    if(isset($_POST["submit"])){
        
        require "./includes/conexao.php";

        $profissao = $_POST["profissao"];
        $titulo = $_POST["titulo"];
        $descricao = $_POST["descricao"];
        $requisitos = $_POST["requisitos"];
        $contrato = $_POST["contrato"];
        $salario = $_POST["salario"];
        $industria = $_POST["industria"];
        $jornada = $_POST["jornada"];
        $dt_inicio = $_POST["inicio"];
        $dt_fim = $_POST["fim"];
        $ativo = $_POST["ativo"];
        $confidencial = $_POST["confidencial"];
        $localidade = $_POST["localidade"];
        $empresa = $_SESSION["login"];

        $result = mysqli_query($link, "SELECT id_empresa FROM tb_empresa AS e INNER JOIN tb_usuario AS u ON e.id_usuario = u.id_usuario WHERE usuario = '$empresa'");
        $a = mysqli_fetch_array($result);

        if(empty($profissao) || empty($titulo) || empty($descricao) || empty($requisitos) || empty($contrato) || 
        empty($salario) || empty($industria) || empty($jornada) || empty($dt_inicio) || empty($dt_fim)){
            echo "<script>alert('Preencha todos os campos')</script>";
            exit;
        }else{
            $sql = "INSERT INTO tb_vaga (`id_profissao`, `id_empresa`,`titulo`,`descricao`,`salario`,`requisitos`,`contrato`,`industria`,`jornada`,`data_inicio`,`data_fim`,`ativo`,`confidencial`, `localidade`) VALUES ($profissao,".$a["id_empresa"].",'$titulo', '$descricao', '$salario', '$requisitos', '$contrato', '$industria', '$jornada' , '$dt_inicio', '$dt_fim', '$ativo', '$confidencial', '$localidade')";
            if (!$link) {
                //header("../cadastro.php?error=sqlerror");
                mysqli_connect_error();
                exit;
            } else {
                mysqli_query($link, $sql) or die("<script>alert('Não foi possível Inserir!')</script>");
                echo "<meta http-equiv='refresh' content='0;url=cadastrar_vaga_c.php' />";
            }
        }
    }

?>

    <!-- script para alertar o usuario sobre os radio button -->
    <script>
        var ativo = document.getElementById("ativo");
        var confidencial = document.getElementById("confidencial");
        ativo.addEventListener("focus", myFocusFunction, true);
        ativo.addEventListener("blur", myBlurFunction, true);
        confidencial.addEventListener("focus", myFocusFunction, true);
        confidencial.addEventListener("blur", myBlurFunction, true);
        function Focus() {
            ativo.insertAdjacentText("afterend", "Selecione apenas um");
            ativo.style.color = "red";
        }

        function Blur() {
        document.getElementById("ativo").style.backgroundColor = "";
        }
    </script>


</body>
</html>