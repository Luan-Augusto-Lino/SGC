<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<div class="center">
<a href="?pagina=inserir_empregados"><div class="bt-inserir">

	<h2>Contratar</h2>

</div></a>
</div>
<br>
<table border="6px" style="width: 100%">
		
	<tr>
		<th style="width: 45%">Nome do Empregado</th>
		<th style="width: 46%">Nome do Cargo</th>
		<th style="width: 3%">Demitir</th>
	</tr>

	<?php

		while ($linha = mysqli_fetch_array($consulta_empregados)) {
			echo "<tr><td>".$linha["nome_candidato"]."</td>";
			echo "<td>".$linha["nome_vaga"]."</td>";
	?>
		<td><a href="views/deleta_empregados.php?id_empregado=<?php echo $linha['id_empregado']; ?>"><center>Demitir</center></a></td></tr>

	<?php  
		}
	?>		
</table>