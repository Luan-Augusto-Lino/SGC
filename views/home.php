<center>
<hr>
<h1> <strong> Bem Vindo Ao S.G.C </strong> <br>
<?php if (isset($_SESSION['login']) AND isset($_SESSION['usuario'])) {
	echo $_SESSION['usuario'];
} ?>
</h1>
<br>
<h2>O Sistema de Gerenciamento de Contratação</h2>
<hr>
<br>
<?php if(!isset($_SESSION['login'])){ ?>
<div class="center">
<a href="?pagina=login"><div class="bt-inserir">

	<h2>Login</h2>

</div></a></div>
<br>
<div class="center">
<a href="?pagina=inserir_candidatos"><div class="bt-inserir">

	<h2>Candidate-se</h2>

</div></a></div>
</center>
<?php } ?>