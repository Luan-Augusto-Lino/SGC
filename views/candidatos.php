<head>
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<?php if(!isset($_SESSION['login'])){ ?>
<div class="center">
<a href="?pagina=inserir_candidatos"><div class="bt-inserir">

	<h2>Candidatar-se</h2>

</div></a>
</div>
<br>
<?php } ?>
<table border="5px" style="width: 100%">
		
	<tr>
		<th style="width: 47%">Nome</th>
		<th style="width: 47%">Vaga	</th>
		<?php if(isset($_SESSION['login'])){ ?>
		<th style="width: 3%">Visualizar</th>
		<?php } ?>
		<?php if(isset($_SESSION['login'])){ ?>
		<th style="width: 3%;">Deletar</th>
		<?php } ?>
	</tr>

	<?php

		while ($linha = mysqli_fetch_array($consulta_candidatos)) {
			if ($linha["empregado"] == 'n') {
			echo "<tr><td>".$linha["nome_candidato"]."</td>";
			echo "<td>".$linha["vaga_req"]."</td>";
	?>

		<?php if(isset($_SESSION['login'])){ ?>
		<td><a href="?pagina=ver_candidatos&candidato=<?php echo $linha['id_candidato']; ?>"><center>Visualizar</center></a></td>
		<?php } ?>

		<?php if(isset($_SESSION['login'])){ ?>
		<td><a href="views/deleta_candidatos.php?id_candidato=<?php echo $linha['id_candidato']; ?>"><center>Deletar</center></a></td></tr>
		<?php } ?>

	<?php } } ?>		

</table>