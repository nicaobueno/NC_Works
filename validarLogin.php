<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Login</title>
</head>

<body>
    <?php
    session_start();
    require "conexao.php";
    echo "VALIDAR LOGIN";
    $email  =   $_POST["email"];
    $senha  =   $_POST["senha"];
    $query="SELECT * FROM tbdados WHERE email='$email' AND senha='$senha'";
    $sql=mysqli_query($conexao, $query) or die ("Erro ao acessar a Tabela Dados");
    $resultado=mysqli_num_rows($sql);
    if($resultado == 0) {
        echo "Acesso Negado!";
        echo "<br>Retornando para página de Login...";
        echo "<meta http-equiv='refresh' content='2;url=login.php' />";
    }   
    
    else
    {
		$_SESSION["email"]	=	$email;
		$_SESSION["senha"]	=	$senha;
      	echo "<meta http-equiv='refresh' content='0;url=principal.php' />"; 
    }
    ?>
</body>
</html>
