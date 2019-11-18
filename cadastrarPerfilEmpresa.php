<?php
    require_once "includes/conexao.php";

    if(isset($_POST["enviar"])){
        $nomeEmpresa = $_POST["nomeEmpresa"];
        $CNPJ = $_POST["CNPJ"];
        $CEP = $_POST["CEP"];
        $pais = $_POST["pais"];
        $ufs = $_POST["ufs"];
        $cidade = $_POST["cidade"];
        $bairro = $_POST["bairro"];
        $rua = $_POST["rua"];
        $email = $_POST["email"];
        $site_Empresa = $_POST["siteEmpresa"];
        $contato = $_POST["contato"];
        $sobre = $_POST["sobre"];

        if(empty($nomeEmpresa) || empty($CNPJ) || empty($CEP) || empty($pais) || empty($ufs) || empty($cidade) || empty($bairro)  || empty($rua) || empty($email)){
            echo "<script>alert('Preencha todos os campos obrigatórios')</script>";
            exit;
        }else{
            $insert = "INSERT INTO tb_empresa VALUES (null, '$nomeEmpresa','$CNPJ','$CEP','$pais','$ufs','$cidade','$bairro','$rua','$email','$site_Empresa','$contato','$sobre',1,2)";
            $salvar = mysqli_query($link, $insert);    
                if ($salvar) {
                    echo "<script>alert('Salvo com sucesso!')</script>";
                    echo "<meta http-equiv='refresh' content='0;url=pagPrincipal.php' />";
                } else {
                    echo "<script>alert('Não foi possível Inserir!')</script>";
                    echo "<meta http-equiv='refresh' content='0;url=pagPrincipal.php' />";
                }
        }
    }



?>