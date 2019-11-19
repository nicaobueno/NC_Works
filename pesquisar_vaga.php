<?php
require "validar.php";
?>
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
			<?php 
				if(isset($_GET["pesquisa"])){
					$search = $_GET["pesquisa"];	
				}

				echo "<input type='text' class='form-control' autofocus name='pesquisa' placeholder='Digite aqui sua pesquisa...' value='$search' /> ";
			?>	 
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
	unset($_GET["pesquisa"]);

	if (trim($pesquisa) == null) {
		echo "<center>
		<div id='alerta' class='alert alert-danger alert-dismissible fade show' role='alert'>
		<h4 style='color:black'>Digite algo para pesquisar!</h4>
		</div>
		</center>";
	}else{
		$pesquisa = trim($pesquisa);
		$pesquisa_array = explode(' ', $pesquisa);
		//ESPECIFICA PALAVRAS QUE NÃO SERÃO PESQUISADAS
		$palavras_excluidas = array('de', 'do', 'da');
		$pesquisa_array = array_diff($pesquisa_array, $palavras_excluidas);
		$qnt = sizeof($pesquisa_array);
		$id_mostrado = array("");

		for ($i=0; $i < $qnt; $i++) { 
			$search = $pesquisa_array[$i];
			//$sql = "SELECT * FROM `tb_vaga` WHERE `titulo` LIKE '%".$pesquisa."%' OR `descricao` LIKE '%".$pesquisa."%' ORDER BY ativo DESC, vizualizacoes DESC, titulo ASC";
			$sql = "SELECT * FROM `tb_vaga` LEFT JOIN tb_profissao ON tb_vaga.id_profissao = tb_profissao.id_profissao WHERE `titulo` LIKE '%".$pesquisa."%' OR `descricao` LIKE '%".$pesquisa."%' ORDER BY vizualizacoes DESC, titulo ASC";
			$r = mysqli_query($link, $sql) or die("Erro!");
			if (mysqli_num_rows($r) <= 0) {
				echo 
				"
				<center>
				<div id='alerta' class='alert alert-warning alert-dismissible fade show' role='alert'>
					<span class='text-dark'><h4>Não foi encontrado nada!</h4></span></br><br>
					<span><h6><i>Por favor, verifique sua pesquisa</i></h6></span>
				</div>      
				</center>
				";
				exit;
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
											<!-- <span style='font-size:14px'><b>Id: </b>$id_vaga</span> -->
											<br /> 
											<span style='font-size:14px'><b>Titulo: </b>$titulo</span>
											<br />
											<span style='font-size:14px'><b>Descrição: </b>$descricao</span>
											<br /><br />
											<a href='?action=detalhes_vaga&id=$id_vaga&pesquisa=$pesquisa'><input type='button' class='btn btn-outline-info' style='cursor:pointer' value='Ver mais detalhes...' /></a>
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
	echo "<center><div class='alert alert-dark' role='alert'><h4>Vagas recentes</h4></div></center>";
	require_once "includes/conexao.php";
	$sql = "SELECT * FROM `tb_vaga` LEFT JOIN tb_profissao ON tb_vaga.id_profissao = tb_profissao.id_profissao ORDER BY id_vaga DESC, vizualizacoes DESC, titulo ASC LIMIT 5";
	$r = mysqli_query($link, $sql) or die("Erro!");

	while ($a = mysqli_fetch_array($r)){
		$profissao = $a["profissao"];
		$id_vaga = $a["id_vaga"];
		$id = $a["id_profissao"];
		$titulo = $a["titulo"];
		$descricao = $a["descricao"];
		$ativo = $a["ativo"];

		echo "
			<hr />
			<div>
				<div class='container d-block' style='box-shadow: 0 4px 10px 0 rgba(215, 156, 255, 0.3);'>
						<div class='container'>
							<br />
							<span class='d-inline' style='font-size:20px;color:blue'>Vaga de $profissao</span>
							<br />
							<!-- <span style='font-size:14px'><b>Id: </b>$id_vaga</span> -->
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
	}
	echo 
	"
	<hr/>
		<div id='vermais'>
			<center>
				<button id='btnvermais' style='cursor:pointer' class='btn btn-dark'/>Mais vagas...</button>
			</center>
			<br>
		</div>
	<hr/>
	<div id='ver'></div>
	";
	
	function mostrarVagas() {
		$sql = "SELECT * FROM `tb_vaga` LEFT JOIN tb_profissao ON tb_vaga.id_profissao = tb_profissao.id_profissao ORDER BY id_vaga DESC, vizualizacoes DESC, titulo ASC LIMIT 5";
		$r = mysqli_query($link, $sql) or die("Erro!");

		while ($a = mysqli_fetch_array($r)){
			$profissao = $a["profissao"];
			$id_vaga = $a["id_vaga"];
			$id = $a["id_profissao"];
			$titulo = $a["titulo"];
			$descricao = $a["descricao"];
			$ativo = $a["ativo"];

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
		}
	}
}

?>

<!-- <script>
	function name() {
    var btn = document.createElement("button");
    btn.innerHTML = 'button';
    var ver = document.getElementById('vermais')
    ver.appendChild(btn);
    var btnver = document.getElementById('bnt_vermais')
    btnver.insertBefore(btn, null);
}

</script> -->

<script src="bts/node_modules/jquery/dist/jquery.js"></script>
<script src="bts/node_modules/popper.js/dist/umd/popper.js"></script>
<script src="bts/node_modules/bootstrap/dist/js/bootstrap.js"></script>

<script>
	$("#btnvermais").click(function(){
		$.post( "functions.php", function( response ) {
			$("#vermais").html( response );
		});
	});
</script>

<script>$('#alerta').alert()</script>

</body>
</html>