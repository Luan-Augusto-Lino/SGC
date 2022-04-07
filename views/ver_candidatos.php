<?php
include "db.php";

while($linha = mysqli_fetch_array($consulta_candidatos)){
    if($linha["id_candidato"] == $_GET['candidato']){?>

<hr>
<h1 style="text-align: center;"><?php $linha['nome_candidato'] ?></h1>
<hr>

    <div class="visualizar_div">
    <?php
echo  "<br>

    <h3> Nome: </h3>
    <p>" .$linha['nome_candidato']. "</p>

    <br> <br>
    <h3> Idade: </h3>
    <p>" .$linha['idade_candidato']. "</p>

    <br> <br>
    <h3> E-mail: </h3>
    <p>" .$linha['email_candidato']. "</p>

    <br> <br>
    <h3> Telefone: </h3>
    <p>" .$linha['telefone_candidato']. "</p>

    <br> <br>
    <h3> Escolaridade: </h3>
    <p>" .$linha['escolaridade_candidato']. "</p>

    <br> <br>
    <h3> Endereço: </h3> 
    <p>" .$linha['endereco_candidato']. "</p>

    <br> <br>
    <h3> Experiencia: </h3>
    <p>" .$linha['experiencia_candidato']. "</p>

    <br> <br>
    <h3> Conhecimentos extras: </h3>
    <p>" .$linha['con_extras_candidato']. "</p>


    <br> <br>
    <h3>Vaga:</h3>
    <p>" .$linha['vaga_req']. "</p>

    </div>";

} } ?>