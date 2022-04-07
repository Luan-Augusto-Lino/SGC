<?php

   include "db.php";

   $nome_candidato = $_POST["nome"];
   $idade_candidato = $_POST["idade"];
   $email_candidato = $_POST["email"];
   $telefone_candidato = $_POST["telefone"];
   $escolaridade_candidato = $_POST["escolaridade"];
   $endereco_candidato = $_POST["endereco"];
   $experiencia_candidato = $_POST["experiencia"];
   $con_extras_candidato = $_POST["conhecimentos_extras"];
   $vaga_req = $_POST["vaga_req"];
   $empregado = 'n';

   $query = "INSERT INTO candidatos(nome_candidato, idade_candidato, email_candidato, telefone_candidato, escolaridade_candidato, endereco_candidato, experiencia_candidato, con_extras_candidato, vaga_req, empregado) VALUES ('$nome_candidato', '$idade_candidato', '$email_candidato', '$telefone_candidato', '$escolaridade_candidato', '$endereco_candidato', '$experiencia_candidato', '$con_extras_candidato', '$vaga_req', '$empregado')";

   mysqli_query($con, $query);

   header("location:index.php?pagina=candidatos");
?>