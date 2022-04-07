<?php
include "db.php";

while($linha = mysqli_fetch_array($consulta_vagas)){
    if($linha["id_vaga"] == $_GET['vaga']){?>

<hr>
<h1 style="text-align: center;"><?php $linha['nome_vaga'] ?></h1>
<hr>

    <div class="visualizar_div">
    <?php
echo  "<br>

    <h3> Nome: </h3>
    <p>" .$linha['nome_vaga']. "</p>

    <br> <br>
    <h3> Carga Horaria: </h3>
    <p>" .$linha['carga_horaria']."&ensp;Horas  </p>

    <br> <br>
    <h3> Salario: </h3>
    <p>" .$linha['salario_vaga']. "</p>

    <br> <br>
    <h3> Descrição: </h3>
    <p>" .$linha['descricao_vaga']. "</p>

    <br> <br>
    <h3> Experiencia Minima: </h3>
    <p>" .$linha['experiencia_minima']."&ensp;Meses </p>

    <br> <br>
    <h3> Localização: </h3> 
    <p>" .$linha['localizacao_vaga']. "</p>

    <br> <br>
    <h3> Formação: </h3>
    <p>" .$linha['formacao_vaga']. "</p>

    </div>";

} } ?>