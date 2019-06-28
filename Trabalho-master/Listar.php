<!DOCTYPE html>
<html>
<head>
	<title>Listar</title>
	<meta charset="utf-8">
	<style>
		#quant{
			background-color: blue;
		}
		#nome{
			background-color: gray;
		}
		#codigo{
			background-color: greenyellow;
		}
		#preco{
			background-color:gold;
		}
		#deleta{
			background-color: red;
		}
		#altera{
			background-color: darkkhaki;
		}
	</style>
</head>
<body>
	<?php include_once 'Index.html'; ?>
	<table border="2px">
		<tr>
			<td>Quant.</td>
			<td>Nome do Produto</td>
			<td>Preço do Produto</td>
			<td>Código</td>
			<td>Excluir</td>
			<td>Alterar</td>
		</tr>
	<?php
		include_once 'Conexao.php';
		$r = mysqli_query($con , "select * from obj;");
		if ($r) {
			while ($result = mysqli_fetch_array($r)){?>
				<tr>
					<td id="quant"><?php echo $result['quantidade'];?></td>
					<td id="nome"><?php echo $result['nome'];  ?></td>
					<td id="preco"><?php echo $result['preco'];?> R$</td>
					<td id="codigo"><?php echo $result['codigo']; ?></td>
					<td id="deleta"><a href="Excluir.php?id=<?php echo $result['codigo']; ?>">Excluir</a></td>
					<td id="altera"><a href="Alterar.php?codigo=<?php echo $result['codigo']?>&nome=<?php echo $result['nome']?>&preco=<?php echo $result['preco']?>&quantidade=<?php echo $result['quantidade']?>">Alterar</a></td>
				</tr>
				<?php 
			}
		} ?>
	</table>
</body>
</html>