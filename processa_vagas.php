<?php

   include "db.php";

   $nome_vaga = $_POST["nome_vaga"];
   $carga_horaria = $_POST["carga_horaria"];
   $salario_vaga = $_POST["salario_vaga"];
   $descricao_vaga = $_POST["descricao_vaga"];
   $experiencia_minima = $_POST["experiencia_minima"];
   $localizacao_vaga = $_POST["localizacao_vaga"];
   $formacao_vaga = $_POST["formacao_vaga"];
   $Nvagas = $_POST["Nvagas"];
   $ocupada = 'n';


   for ($x = 1; $x <= $Nvagas; $x++) {
  
   $query = "INSERT INTO vagas(nome_vaga, carga_horaria, salario_vaga, descricao_vaga, experiencia_minima, localizacao_vaga, formacao_vaga, ocupada) VALUES ('$nome_vaga', '$carga_horaria', '$salario_vaga', '$descricao_vaga', '$experiencia_minima', '$localizacao_vaga', '$formacao_vaga', '$ocupada')";

   mysqli_query($con, $query);

	}

   header("location:index.php?pagina=vagas");

?>