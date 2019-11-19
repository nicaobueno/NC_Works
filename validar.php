<?php
    session_start();
    //captura a url atual
    //$referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';

    if(!isset($_SESSION["login"])){
        echo "<script>alert('Faça login para acessar esta página')</script>";
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        exit;
    }