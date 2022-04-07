<?php
include "db.php";
?>
<hr>
<h1 style="text-align: center;">Candidate-se</h1>
<h3 style="text-align: center;">*Obrigatório</h3>
<hr>
<div class="formdiv">
<form class="formulario" method="post" action="processa_candidatos.php">
    <br>

    <label> *Nome: </label>
    <input required type="text" name="nome" placeholder="Nome">

    <br> <br>
    <label> *Idade: </label>
    <input required type="text" name="idade" placeholder="Idade">

    <br> <br>
    <label> &ensp;E-mail: </label>
    <input type="text" name="email" placeholder="E-mail">

    <br> <br>
    <label> *Telefone: </label>
    <input required type="text" name="telefone" placeholder="Telefone">

    <br> <br>
    <label> *Escolaridade: </label>
    <input required type="text" name="escolaridade" placeholder="Escolaridade">

    <br> <br>
    <label> *Endereço: </label>
    <input required type="text" name="endereco" placeholder="Endereço">

    <br> <br>
    <label> *Experiencia: </label>
    <input required type="text" name="experiencia" placeholder="Experiencia">

    <br> <br>
    <label> &ensp;Conhecimentos extras: </label>
    <input type="text" name="conhecimentos_extras" placeholder="Conhecimentos extras">


    <br> <br>
    <label for="vagas">*Vaga:</label>
	<select name="vaga_req">
		<option value="sem_preferencia">Sem Preferencia</option>
		<?php 
			while ($linha = mysqli_fetch_array($consulta_vagas2)) {
			echo "<option value=".$linha['nome_vaga'].">".$linha['nome_vaga']."</option>";
		} ?>
	</select>

    <br> <br>
    <div class="formbtn">
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
	</div>
</form>
</div>