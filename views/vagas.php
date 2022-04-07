<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>

<?php if(isset($_SESSION['login'])){ ?>
<div class="center">
<a href="?pagina=inserir_vagas"><div class="bt-inserir">

	<h2>Inserir nova vaga</h2>

</div></a>
</div>
<?php } ?>
<br>

<table border="6px" style="width: 100%">
		
	<tr>
		<th style="width: 3%">Ocupado</th>
		<th style="width: 26%">Vaga</th>
		<th style="width: 26%">Carga Horaria</th>
		<th style="width: 26%">Salario</th>
		<th style="width: 3%">Visualizar</th>
		<?php if(isset($_SESSION['login'])){ ?>
		<th style="width: 3%;">Editar</th>
		<?php } ?>
		<?php if(isset($_SESSION['login'])){ ?>
		<th style="width: 3%;">Deletar</th>
		<?php } ?>
	</tr>

	<?php

		while ($linha = mysqli_fetch_array($consulta_vagas)) {
			if ($linha['ocupada'] == "n") {
			echo "<tr><td>Não</td>";
			}else{echo "<tr><td>Sim</td>";}
			echo "<td>".$linha["nome_vaga"]."</td>";
			echo "<td>".$linha["carga_horaria"]."</td>";
			echo "<td>".$linha["salario_vaga"]."</td>";
	?>
		<td><a href="?pagina=ver_vagas&vaga=<?php echo $linha['id_vaga']; ?>"><center>Visualizar</center></a></td>
		<?php if(isset($_SESSION['login'])){ ?>
		<td><a href="?pagina=inserir_vagas&editar=<?php echo $linha['id_vaga']; ?>"><center>Editar</center></a></td>
		<td><a href="views/deleta_vagas.php?id_vaga=<?php echo $linha['id_vaga']; ?>"><center>Deletar</center></a></td></tr>
		<?php } ?>

	<?php } ?>		
</table>