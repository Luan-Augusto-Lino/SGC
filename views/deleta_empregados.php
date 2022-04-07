<?php 
	
	include '../db.php';

	$id_empregado1 = $_GET['id_empregado'];

	while($linha = mysqli_fetch_assoc($consulta_empregados2)){
   		if ($linha["id_empregado"] == $id_empregado1) {
   				$query = "DELETE FROM empregados WHERE empregados.id_empregado = ".$linha['id_empregado']." ";
   				$query2 = "UPDATE candidatos SET empregado = 'n' WHERE candidatos.id_candidato = ".$linha['id_candidato_em']."";
   				$query3 = "UPDATE vagas SET ocupada = 'n' WHERE vagas.id_vaga = ".$linha['id_vaga_em']."";

   				echo $query;
   				echo $query2;
   				echo $query3;

   				mysqli_query($con,$query);
   				mysqli_query($con,$query2);
   				mysqli_query($con,$query3);
   		}
   	}	

	header("location:../index.php?pagina=empregados");

?>