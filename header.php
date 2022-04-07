<!DOCTYPE html>
<html lang="pt-br">
<head>

   <title> S.G.C </title>

   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="css/estilo.css">
   <link rel="shortcut icon" href="img/icon.png" />
</head>
<body>

   <header>
      <div class="container">
          <a href="?pagina=home"><img id="logo" src="img/logo.png" title="Logo" alt="Logo"></a>
        <div id="menu">
          <?php if (isset($_GET['pagina']) AND $_GET['pagina'] == "candidatos") { ?>
            <a href="?pagina=candidatos" id="selecionado"> Candidatos </a>
          <?php }else{ ?>
          <a href="?pagina=candidatos"> Candidatos </a>
          <?php } ?>
          <?php if (isset($_GET['pagina']) AND $_GET['pagina'] == "vagas") { ?>
            <a href="?pagina=vagas" id="selecionado"> Vagas </a>
          <?php }else{ ?>
          <a href="?pagina=vagas"> Vagas </a>
          <?php } ?>
          <?php if(isset($_SESSION['login'])){ ?>
            <?php if (isset($_GET['pagina']) AND $_GET['pagina'] == "empregados") { ?>
              <a href="?pagina=empregados" id="selecionado"> Empregados </a>
            <?php }else{ ?>
            <a href="?pagina=empregados"> Empregados </a>
            <?php } ?>
          <?php } ?> 
          <?php if(isset($_SESSION['login'])){ ?>
            <a href="logout.php">
              Logout
            </a>
          <?php }else { ?>
            <a href="?pagina=login">
              Login
            </a>
          <?php } ?>  
        </div>
      </div>
   </header>

   <div id="conteudo" class="container">