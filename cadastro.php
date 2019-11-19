<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Inserir Dados</title>
    <script>
        function fechar() {
            document.frmCadastro.action = "./index.php";
            document.forms.frmCadastro.submit();
        }
    </script>
</head>

<body>
<!-- <form name="frmCadastro" method="post" action="">
    <table width="500" border="0">
        <tr>
            <h3>Preencha todos os campos</h3>
        </tr>
        <tr>
            <td><label for="usuario">Usuário:</label></td>
            <td><input require type="text" name="usuario" size="50" maxlength="50"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail:</label></td>
            <td><input require type="email" name="email" size="30" maxlength="30"></td>
        </tr>
        <tr>
            <td><label for="senha">Senha:</label></td>
            <td><input require type="password" name="senha" size="20" maxlength="20"></td>
        </tr>
        <tr>
            <td><label for="confsenha">Digite a senha novamente:</label></td>
            <td><input require type="password" name="confSenha" size="20" maxlength="20"></td>
        </tr>
        <tr>
            <td colspan="3"><button type="submit" name="cadastrar">Cadastrar</button>
            <input type=button onclick=fechar() value=Voltar>
            </td>
        </tr>
    </table>
</form> -->
    <?php

    require "./includes/conexao.php";

    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confSenha = $_POST["confSenha"];
    $tipo = "fisica";

    if (empty($usuario) || empty($email) || empty($senha) || empty($confSenha)) {
        //header("../cadastro.php?error=emptyfields&user=" . $usuario . "&email=" . $email);
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        exit("<script>alert('Campos Vazios')</script>");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9-_.]*$/", $usuario)) {
        //header("../cadastro.php?error=invalidemailuser");
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        exit("<script>alert('Email e/ou senha inválidos')</script>");
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //header("../cadastro.php?error=invalidemail&user=" . $usuario);
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        exit("<script>alert('Email inválido')</script>");
    } elseif (!preg_match("/^[a-zA-Z0-9-_.]*$/", $usuario)) {
        //header("../cadastro.php?error=invaliduser&email=" . $email);
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        exit("<script>alert('Senha inválida')</script>");
    } elseif ($senha !== $confSenha) {
        //header("../cadastro.php?error=passwordcheck&user=" . $usuario . "&email=" . $email);
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        exit("<script>alert('Senhas não coincidem')</script>");
    } else {
        $usuario = mysqli_escape_string($link, $usuario);
        $sql = "SELECT email FROM tb_usuario WHERE email='$email'";
        $result = mysqli_query($link, $sql); 
        if(!$result || mysqli_num_rows($result) > 0){        
        // $rows = mysqli_num_rows($result);
            //header("../cadastro.php?error=usertaken&email=" . $email);
            echo "<script>alert('Usuario ja cadastrado')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.php' />";
        } else {            
            $hash = password_hash($senha, PASSWORD_BCRYPT);
            $sql = "INSERT INTO tb_usuario VALUES (0,'$usuario', '$email', '$hash', '$tipo', 0, 0)";
            mysqli_query($link, $sql) or die("Não foi possível Inserir!");
            echo "<script>alert('Dados inseridos com sucesso!')</script>";
        }
        }
        mysqli_close($link);
        echo "<meta http-equiv='refresh' content='0;url=index.php' />";

// // else 
//     header("Location: index.php");
//     exit();

?>
</body>
</html>
