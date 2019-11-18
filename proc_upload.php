<html>
<body>
<?php 
    include_once ("./includes/conexao.php");

    $ariquivo = $_FILES['arquivo']['name'];
    //local onde a imgagem vai estar
    $_UP['pasta'] = 'img/';
    //tamanho da imagem
    $_UP['tamanho'] = 1024*1024*100;//5mb
    //arrays 
    $_UP['extensoes'] = array('png', 'jpg', 'jpeg');
    //renomeiar o arquivo
    $_UP['renomeia'] = true;
    //Arrays com erros de upload
    $_UP['erros'][0] = 'Não ouve erro';
    $_UP['erros'][1] = 'O arquivo de upload é maior que o limite!';
    $_UP['erros'][2] = 'O aqrquivo de upload é muito extenso!';
    $_UP['erros'][3] = 'O upload do arquivo não foi concluido!';
    $_UP['erros'][4] = 'Não foi feito o upload do arquivo!';
    //Verifica se houve algum erro na hora de salva a imagem
    if($_FILES['arquivo']['erros'] != 0){
        die("Não foi possivel fazer o upload, erro: </br>". $_UP['erros'][$_FILES['arquivo']['error']]);
        exit;
    }
    //Faz a verificação da extensao do arquivo
    $extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
    if(array_search($extensao, $_UP['extensoes']) === false){
        echo "
        <META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/hm/index.php?action=empresas'>
            <script type=\"text/javascript\">
                alert (\"A imagem não foi cadastrada extensão invalida.\");
            </script>
        ";
    }
    //Faz a verificação do tamanho do ariquivo 
    else if($_UP['tamanho'] < $_FILES['arquivo']['size']){
        echo "
        <META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/hm/index.php?action=empresas'>
            <script type=\"text/javascript\">
                alert (\"O tamanho da imagem é maior que o permitido.\");
            </script>
        ";
    }
    //O arquivo passou em todas as verificações, agora a validação para mover para a pasta 'img'
    else{
        //primeiro verifica se deve trocar o nome do araquivo
        if($_UP['renomeia'] == true){
            $nome_final = time().'.jpg';
        }else{
            //mantem o nome original do arquivo
            $nome_final = $_FILES['arquivo']['name'];
        }
        //Verificar se é possivel mover o arquivo para a pasta escolhida
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
            //Upload feito com sucesso ira mostrar a mensagem na tela
            $sql = "INSERT INTO tb_img (id_img ,img) VALUES ( , '$nome_final')";
            $query = mysqli_query($link, $sql);
            echo "$query";
            echo "
            <META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/hm/index.php?action=empresas'>
                <script type=\"text/javascript\">
                    alert (\"Sucesso.\");
                </script>
            ";
        }else{
            //Upload mal sucedido
            echo "
            <META HTTP-EQUIV-REFRESH CONTENT = '0;URL=http://localhost/hm/index.php?action=empresas'>
                <script type=\"text/javascript\">
                    alert (\"Não foi possivel colocar a imagem.\");
                </script>
            ";
        }
    }
?>
</body>
</html>