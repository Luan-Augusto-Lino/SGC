<?php

   $vaga_escolhida = $_POST["escolha_vaga"];

   mysqli_query($con, $query);

   header("location:index.php?pagina=inserir_empregados&vaga_escolhida=".$vaga_escolhida);

?>