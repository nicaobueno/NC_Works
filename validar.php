<?php
    session_start();
    
    if(!isset($_SESSION["login"])){
        header("Location: index.php");
        echo "<script>alert('Faça login para acessar esta página')</script>";
        exit;
    }
    
