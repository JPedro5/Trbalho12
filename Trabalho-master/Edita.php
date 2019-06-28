<?php 
	$codigo = $_POST['codigo'];
	$preco = $_POST['preco'];
	$quantidade = $_POST['quantidade'];
	$nome = $_POST['nome'];
	include_once 'index.html';
	include_once 'Conexao.php';
	$sql = "UPDATE obj SET nome = '$nome', quantidade = $quantidade, preco = $preco where codigo = '$codigo'";
	$r = mysqli_query($con, $sql);
	if ($r) {
		header('location:Listar.php');
	}else{
		
	}
?>