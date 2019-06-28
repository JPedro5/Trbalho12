<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro Alunos</title>
</head>
<body>

	<?php include_once "Index.html"; ?>
	<form action="Salvar.php" method="POST">
		<table border = "1px">
			<tr align="center">
				<td colspan="2">Cadastro de Produtos</td>
			</tr>
			<tr>
				<td><label>Quantidade :</label></td>
				<td><input type="text" name="quantidade" id="quantidade"></td>
			</tr>
			<tr>
				<td><label>Nome :</label></td>
				<td><input type="text" name="nome" id="nome"></td>
			</tr>
			<tr>
				<td><label>Preço :</label></td>
				<td><input type="double" name="preco" id="preco"></td>
			</tr>
			<tr align="center">
				<td colspan="2"><input type="submit" name="salva" value="Cadastrar"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>