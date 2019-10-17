<?php
    session_start();
    //captura a url atual
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

    if(!isset($_SESSION["login"])){
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        echo "<script>alert('Faça login para acessar esta página')</script>";
        exit;
    }else{
        $u = $_SESSION["login"];
        require_once "./includes/conexao.php";
        $sql = "SELECT tipo FROM tb_usuario WHERE usuario='$u'";
        $result = mysqli_query($link, $sql);
        $array = mysqli_fetch_array($result);
        if($array["tipo"] == "juridica"){
            $_SESSION["tipo"] = "empresa";
        }elseif($array["tipo"] == "fisica"){
            $_SESSION["tipo"] = "pessoa";
        }
    }
    