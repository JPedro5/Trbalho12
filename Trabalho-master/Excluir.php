<?php 
	include_once 'Conexao.php';
	$cod = $_GET['id'];
	$sql = "delete from obj where codigo =$cod";
	$r = mysqli_query($con , $sql);
	if ($r) {
		header('location:Listar.php');
	}
 ?>