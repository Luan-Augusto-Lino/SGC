<?php

   include "db.php";

   $id_vaga1 = $_POST["vaga_escolhida"];
   $id_candidato1 = $_POST["escolha_candidato"];

    $query = "INSERT INTO empregados(id_vaga_em, id_candidato_em) VALUES ('$id_vaga1', '$id_candidato1');";
	$query2 = "UPDATE candidatos SET empregado = 's' WHERE candidatos.id_candidato = $id_candidato1;";
 	$query3 = "UPDATE vagas SET ocupada = 's' WHERE vagas.id_vaga = $id_vaga1;";

   echo $query;
   echo $query2;
   echo $query3;
   mysqli_query($con,$query);
   mysqli_query($con,$query2);
   mysqli_query($con,$query3);

   header("location:index.php?pagina=empregados");

?>