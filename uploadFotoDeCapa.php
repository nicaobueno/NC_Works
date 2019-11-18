<?php 
    include_once ("./includes/conexao.php");

    $msg = false;

    if(isset($_FILES['arquivo'])){

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = time(). $extensao;
        $diretorio = "img/";

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

        $sql_code = "INSERT INTO tb_img (id_img, img_capa) VALUES (null,'$novo_nome')";

        if(mysqli_query($link, $sql_code))
            $msg = "Imagem enviada!";
        else
            $msg = "Não foi possivel enviar a imagem!";
    }



    if($msg != false)
        echo "
        <script>
            alert (\" $msg \");
        </script>
        ";
        echo "<meta http-equiv='refresh' content='0;url=http://localhost/hm/index.php?action=empresas' />";
    
?>