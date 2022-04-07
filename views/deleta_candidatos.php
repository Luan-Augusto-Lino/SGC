<?php 
	
	include '../db.php';

	$id_candidato = $_GET['id_candidato'];

	$query = "DELETE FROM candidatos WHERE id_candidato = $id_candidato";

	mysqli_query($con, $query);

	header("location:../index.php?pagina=candidatos");

?>