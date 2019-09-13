<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Encerrar a Sessão</title>
</head>

<body>
<?php
session_start();
session_destroy();
echo "<meta http-equiv='refresh' content='0;url=./index.php' />";	
?>
</body>
</html>