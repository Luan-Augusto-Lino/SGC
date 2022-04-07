<?php if(isset($_GET['erro'])){ ?>

<div>
	<center><h2>Usuário e/ou senha invalidos.</h2></center>
</div>

<?php } ?>

<div class="formdiv">
<form method="post" action="login.php" class="login formulario">

	<h1>Faça o seu login</h1>
	<br>
	<label>Usuário:</label>
	<input type="text" name="usuario" placeholder="Nome do usuário">
	<br><br>
	<label>Senha:</label>
	<input type="text" name="senha" placeholder="Senha do usuário">

	<br><br>

	<div class="formbtn">
	<input type="submit" value="Entrar">
	<div class="formbtn">
</form>
</div>