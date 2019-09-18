<?php
  session_start();
?>
<?php
// session_start();
// if (!isset($_SESSION["login"])){
// 	header("Location: index.php");
// 	exit;
//   }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>
    <!-- <div>
        <form method="POST" action="">
            <div>
                <label for="login">Usuário:</label>
                <input type="text" id="login" name="login">
            </div>
            <div>
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">

            </div>
            <div>
                <button type="submit" name="entrar">Entrar</button>
            </div>
            <div>
                <a href="recuperar.php" target=""><input type="button" value="Esqueci o usuário"></a>
                <a href="recuperar.php" target=""><input type="button" value="Esqueci a senha"></a>
            </div>
            <p>
                Não é cadastrado? <a href="./cadastro.php">Cadastrar</a>
            </p>
        </form>
    </div> -->

    <?php
            require "./includes/conexao.php";

            $login = $_POST["login"];
            $senha = $_POST["senha"];

            if(filter_var($login, FILTER_VALIDATE_EMAIL)){
                $login = mysqli_escape_string($link, $login);
                $senha = mysqli_escape_string($link, $senha);

                $sql = "SELECT usuario, email, senha FROM tb_usuario WHERE email='$login'";
            }else{
                $login = mysqli_escape_string($link, $login);
                $senha = mysqli_escape_string($link, $senha);

                $sql = "SELECT usuario, email, senha FROM tb_usuario WHERE usuario='$login'";
            }            

            if (!$link) {
            //header("../cadastro.php?error=sqlerror");
            mysqli_connect_error();
            exit;
        }else {    
            $result = mysqli_query($link, $sql) or die("Erro!"); 
            $array = mysqli_fetch_array($result);             
            if(!$result || mysqli_num_rows($result) <= 0){        
                // $rows = mysqli_num_rows($result);
                //header("../cadastro.php?error=usertaken&email=" . $email);                
                // echo "<meta http-equiv='refresh' content='0;url=login.php' />";
               echo "<script>alert('Usuário/email ou senha incorretos')</script>";
               exit("<meta http-equiv='refresh' content='0;url=index.php' />");
            }elseif(password_verify($senha, $array["senha"]) == true){
                $nome = $array["usuario"];
                $_SESSION["login"] = $login;
                $_SESSION["senha"] = $senha;
                $_SESSION["nome"] = $nome;
                // $sql = "SELECT * FROM tb_usuario WHERE usuario='$login'";
                // $result = mysqli_query($link, $sql) or die("Erro!"); 
                // $array = mysqli_fetch_array($result);
                // $nome = $array["usuario"];
                
                // echo("<script>alert('Logado com Sucesso!')</script>");                                                
                setcookie("login",$login);                
                echo "<meta http-equiv='refresh' content='0;url=index.php' />";                
                exit;
            }        
            
    }
        
    ?>

</body>

</html>
