<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/estilo2.css" />
	<link rel="shortcut icon" type="image/png" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bts/node_modules/bootstrap/compiler/bootstrap.css">
    <title>Pesquisar</title>
</head>
<body class="bg-light">

<?php
	// if( $_SERVER['REQUEST_METHOD']=='POST' )
	// {
	// 	$where = Array();

	// 	$nome = getPost('n');
	// 	$cidade = getPost('c');
	// 	$bairro = getPost('b');


	// 	if( $nome ){ $where[] = " `nome` = '{$nome}'"; }
	// 	if( $cidade ){ $where[] = " `cidade` = '{$cidade}'"; }
	// 	if( $bairro ){ $where[] = " `bairro` = '{$bairro}'"; }

	// 	$sql = "SELECT nome, cidade, bairro FROM local ";
	// 	if( sizeof( $where ) )
	// 		$sql .= ' WHERE '.implode( ' AND ',$where );

	// 	echo $sql;//execute a query aqui
	// }
	// //a cargo do leitor melhorar o filtro anti injection
	// function filter( $str ){
	// 	return addslashes( $str );
	// }
	// function getPost( $key ){
	// 	return isset( $_POST[ $key ] ) ? filter( $_POST[ $key ] ) : null;
	// }
?>
<!-- <style type="text/css">
label { display: block; }
</style>
<form action="" method="post">
	<label>Nome: <input type="text" name="n" /></label>
	<label>Cidade: <input type="text" name="c" /></label>
	<label>Bairro: <input type="text" name="b" /></label>
	<label><input type="submit" name="ok" value="Ok" /></label>
</form> -->

<center>
	<div class="container" style="padding-top:20px">
		<img src="./img/pesquisar_vagas.png" height="33%" width="33%" />
		<br /><br />
		<form action="" method="post">
			<div class="input-group mb-3">
				<input type="text" class="form-control" autofocus name="pesquisa" placeholder="Digite aqui sua pesquisa..." aria-label="Digite aqui sua pesquisa..." aria-describedby="basic-addon2">
				<div class="input-group-append">
					&nbsp<button type="submit" name="submit" class="btn btn-outline-primary" style='cursor:pointer' type="button">Pesquisa</button>
				</div>
			</div>	
		</form>
	</div>
</center>

<br /><br />

<?php
if (isset($_POST["submit"])) {
	
	require_once "./includes/conexao.php";

	$pesquisa = $_POST["pesquisa"];
	if (trim($pesquisa) == null) {
		echo "<center><span class='h4 text-danger'>Digite algo para pesquisar!</span></center>";
	}else{

		$pesquisa_array = explode(' ', $pesquisa);
		$qnt = sizeof($pesquisa_array);
		$id_mostrado = array("");

		for ($i=0; $i < $qnt; $i++) { 
			$search = $pesquisa_array[$i];
			//$sql = "SELECT * FROM `tb_vaga` WHERE `titulo` LIKE '%".$pesquisa."%' OR `descricao` LIKE '%".$pesquisa."%' ORDER BY ativo DESC, vizualizacoes DESC, titulo ASC";
			$sql = "SELECT * FROM `tb_vaga` LEFT JOIN tb_profissao ON tb_vaga.id_profissao = tb_profissao.id_profissao WHERE `titulo` LIKE '%".$pesquisa."%' OR `descricao` LIKE '%".$pesquisa."%' ORDER BY ativo DESC, vizualizacoes DESC, titulo ASC";
			$r = mysqli_query($link, $sql) or die("Erro!");
			if (mysqli_num_rows($r) <= 0) {
				echo "<center><h4 style='color:#8a9602'><i>Não foi encontrado nada!</i></h4></center>";
			}else{
				while ($a = mysqli_fetch_array($r)){
					$profissao = $a["profissao"];
					$id_vaga = $a["id_vaga"];
					$id = $a["id_profissao"];
					$titulo = $a["titulo"];
					$descricao = $a["descricao"];
					$ativo = $a["ativo"];
					//style='background-color: #868e96; color:White'
					if ($ativo == 1) {
						if(!array_search($id, $id_mostrado)){
							echo "
							<hr />
							<div>
								<div class='container d-block' style='box-shadow: 0 4px 10px 0 rgba(215, 156, 255, 0.3);'>
										<div class='container'>
											<br />
											<span class='d-inline' style='font-size:20px;color:blue'>Vaga de $profissao</span>
											<br />
											<span style='font-size:14px'><b>Id: </b>$id_vaga</span>
											<br />
											<span style='font-size:14px'><b>Titulo: </b>$titulo</span>
											<br />
											<span style='font-size:14px'><b>Descrição: </b>$descricao</span>
											<br /><br />
											<a href='?action=detalhes_vaga&id=$id_vaga'><input type='button' class='btn btn-outline-info' style='cursor:pointer' value='Ver mais detalhes...' /></a>
											<br /><br />
										</div>
									</div>
							</div>
							";
							array_push($id_mostrado, $id);
						}
					}
				}
			}
		}
	}
}else{
	
}
?>

</body>
</html>