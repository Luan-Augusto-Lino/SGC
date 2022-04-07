<?php

   include "db.php";

   $id_vaga = $_POST["id_vaga"];
   $nome_vaga = $_POST["nome_vaga"];
   $carga_horaria = $_POST["carga_horaria"];
   $salario_vaga = $_POST["salario_vaga"];
   $descricao_vaga = $_POST["descricao_vaga"];
   $experiencia_minima = $_POST["experiencia_minima"];
   $localizacao_vaga = $_POST["localizacao_vaga"];
   $formacao_vaga = $_POST["formacao_vaga"];

   $query = "UPDATE vagas SET nome_vaga= '$nome_vaga', carga_horaria= '$carga_horaria', salario_vaga= '$salario_vaga', descricao_vaga= '$descricao_vaga', experiencia_minima= '$experiencia_minima', localizacao_vaga= '$localizacao_vaga', formacao_vaga='$formacao_vaga' WHERE id_vaga = $id_vaga";

   echo $query;

   mysqli_query($con, $query);

   header("location:index.php?pagina=vagas");

?>