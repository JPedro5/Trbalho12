<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Alunos</title>
</head>
<body>
	<?php 
	include_once "Index.html";
	include_once 'Conexao.php';
	$quantidade = $_GET['quantidade'];
	$cod = $_GET['codigo'];
	$nome = $_GET['nome'];
	$preco = $_GET['preco']; ?>
	<form action="Edita.php" method="POST">
		<table>
			<tr>
				<td><label>Numero :</label></td>
				<td><input type="text" name="quantidade" id="quantidade" value="<?php echo $quantidade; ?>"></td>
			</tr>
			<tr>
				<td><label>Nome :</label></td>
				<td><input type="text" name="nome" id="nome" value="<?php echo $nome ?>"></td>
			</tr>
			<tr>
				<td><label>Preço :</label></td>
				<td><input type="double" name="preco" id="preco" value="<?php echo $preco; ?>"></td>
			</tr>
			<tr>
				<td><label>Codigo :</label></td>
				<td><input type="number" name="codigo" id="codigo" value="<?php echo $cod; ?>"></td>
			</tr>
			<tr align="center">
				<td rowspan="2"><input type="submit" name="Editar" value="Editar"></td>
			</tr>
		</table>
	</form>
	<script type="text/javascript">
		
	</script>
	
</body>
</html>