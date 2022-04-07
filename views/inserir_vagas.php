<?php
include "db.php";
if(!isset($_GET["editar"])){ ?>
<hr>
<h1 style="text-align: center;">Nova vaga</h1>
<hr>
<div class="formdiv">
<form class="formulario" method="post" action="processa_vagas.php">
    <br>

    <label> Vaga: </label>
    <input required type="text" name="nome_vaga" placeholder="Vaga">

    <br> <br>
    <label> Carga horaria: </label>
    <input required type="text" name="carga_horaria" placeholder="Carga horária em minutos">

    <br> <br>
    <label> Salário: </label>
    <input required cols="25" type="text" name="salario_vaga" placeholder="Salário">

    <br> <br>
    <label> Descrição: </label>
    <textarea required rows="3" cols="23" name="descricao_vaga" placeholder="Descrição"></textarea>

    <br> <br> <br> <br> <br> 
    <label> Experiencia minima: </label>
    <input required type="text" name="experiencia_minima" placeholder="Experiencia minima em meses">

    <br> <br>
    <label> Localização: </label>
    <input required type="text" name="localizacao_vaga" placeholder="Localização">

    <br> <br>
    <label> Formação: </label>
    <input required type="text" name="formacao_vaga" placeholder="Formação">

    <br> <br>

    <label>Nº de Vagas: </label>
    <input type="number" value="1" min="1" max="100" onKeyUp="if(this.value>100){this.value='100';}else if(this.value<0){this.value=this.value*-1;}" name="Nvagas" placeholder="Nº de Vagas">

    <br> <br>
    <div class="formbtn">
    <input type="reset" value="Limpar">
    <input type="submit" value="Enviar">
	</div>
</form>
</div>

<?php } else { ?>

	<?php while($linha = mysqli_fetch_array($consulta_vagas)){ ?>
		
		<?php if($linha["id_vaga"] == $_GET["editar"]){ ?>

			<h1 style="text-align: center;">Editar Vaga</h1>
			
			<hr>
            <div class="formdiv">
            <form class="formulario" method="post" action="edita_vagas.php">
                <br>
                <input type="text" class="invisivel" value=<?php echo $_GET['editar']; ?> name="id_vaga">

                <label> Vaga: </label>
                <input required value="<?php  ?>" type="text" name="nome_vaga" placeholder="Vaga">

                <br> <br>
                <label> Carga horaria: </label>
                <input required type="text" name="carga_horaria" placeholder="Carga horária em minutos">

                <br> <br>
                <label> Salário: </label>
                <input required type="text" name="salario_vaga" placeholder="Salário">

                <br> <br>
                <label> Descrição: </label>
                <textarea required name="descricao_vaga" placeholder="Descrição"></textarea>

                <br> <br> <br> <br> <br> 
                <label> Experiencia minima: </label>
                <input required type="text" name="experiencia_minima" placeholder="Experiencia minima em meses">

                <br> <br>
                <label> Localização: </label>
                <input required type="text" name="localizacao_vaga" placeholder="Localização">

                <br> <br>
                <label> Formação necessária: </label>
                <input required type="text" name="formacao_vaga" placeholder="Formação necessária">

                <br> <br>
                <div class="formbtn">
                <input type="reset" value="Limpar">
                <input type="submit" value="Enviar">
                </div>
            </form>
            </div>
			

		<?php } ?>

	<?php } ?>

<?php } ?>