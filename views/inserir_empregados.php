<h1 style="text-align: center;">Contratação de Candidato</h1>

<?php if (!isset($_GET['vaga_escolhida'])) { ?>
<div class="formdiv">
<form class="formulario" method="POST" action="confirma_vaga.php">
   <br>
      <label> Selecione a Vaga:&emsp;&emsp;&nbsp; </label>
      <select required name="escolha_vaga">
         <?php
            while($linha = mysqli_fetch_assoc($consulta_vagas2)){
               if ($linha["ocupada"] == 'n') {
                  echo "<option value='".$linha['nome_vaga']."'>".$linha['nome_vaga']."</option>";    
               }
            } 
         ?>
      </select>

      <br> <br>
      <div class="formbtn">
      <input type="submit" value="Confirmar Vaga"> 
      </div>
   </form>
   </div>

<?php } ?>

<?php if (isset($_GET['vaga_escolhida'])) { ?>

   <?php
      while($linha = mysqli_fetch_assoc($consulta_vagas)){
         if ($_GET["vaga_escolhida"] == $linha["nome_vaga"]) {
         $id_vaga_escolhida = $linha["id_vaga"];
         break 1;
      } }
   ?>

   <br>
   <div class="formbtn">
      <a href="?pagina=inserir_empregados"><button>Trocar Vaga</button></a>
   </div>
   <br>
   <div class="formdiv">
   <form class="formulario" method="POST" action="processa_empregados.php">

      <label> Vaga Selecionada:&emsp;&emsp;&nbsp;&nbsp;&nbsp; <?php echo $_GET['vaga_escolhida']; ?></label>
      <input class="invisivel" type="text" value="<?php echo $id_vaga_escolhida; ?>" name="vaga_escolhida">
      <br> <br>
      <br> <br> 
      <label> Selecione o Candidato: </label>
      <select required name="escolha_candidato">
         <?php
            while($linha = mysqli_fetch_assoc($consulta_candidatos)){
               if ($_GET['vaga_escolhida'] == $linha["vaga_req"] OR $linha["vaga_req"] == "sem_preferencia") {
                  if ($linha["empregado"] == 'n') {
                     echo "<option value='".$linha['id_candidato']."'>".$linha['nome_candidato']."</option>"; 
                  }
               }
            } 
         ?>
      </select>
      
      <br> <br>
      <div class="formbtn">
      <input type="submit" value="Contratar"> 
      </div>
   </form> 
   </div>

<?php } ?> 