<?php 
	
	include '../db.php';

	$id_vaga = $_GET['id_vaga'];

	$query = "DELETE FROM vagas WHERE id_vaga = $id_vaga";

	mysqli_query($con, $query);

	header("location:../index.php?pagina=vagas");

?>