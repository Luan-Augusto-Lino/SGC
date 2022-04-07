<?php

	$servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "sgc-db";

    $con = mysqli_connect($servidor, $usuario, $senha, $db);

    if(!$con){
    	echo("Não foi possível se conectar ao banco de dados.");    
    }
   
    $query = "SELECT * FROM candidatos";
    $consulta_candidatos = mysqli_query($con, $query);  

    $query = "SELECT * FROM vagas";
    $consulta_vagas = mysqli_query($con, $query);
      
    $query = "SELECT empregados.id_empregado, vagas.nome_vaga, candidatos.nome_candidato FROM vagas, candidatos, empregados WHERE empregados.id_vaga_em = vagas.id_vaga AND empregados.id_candidato_em = candidatos.id_candidato";

	$consulta_empregados = mysqli_query($con, $query);

    $query = "SELECT * FROM empregados";

    $consulta_empregados2 = mysqli_query($con, $query);

    $query = "SELECT *,Count(*) FROM vagas GROUP BY vagas.ocupada,vagas.nome_vaga ";
    $consulta_vagas2 = mysqli_query($con, $query);
?>