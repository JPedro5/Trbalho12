<?php
	include_once 'Index.html';?><br><?php
	include_once('Conexao.php');
	$numero = $_POST['quantidade'];
	$nome = $_POST['nome'];
	$preco = $_POST['preco'];
	$r = mysqli_query($con, "insert into obj(quantidade, nome, preco)values($numero, '$nome', $preco)");
		if($r){
			header('location:Listar.php');
		}
 ?>