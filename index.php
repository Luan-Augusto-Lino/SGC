<?php

   // Iniciar sessão
   session_start();

   // Conexão    
   include "db.php";

   // Cabeçalho
   include "header.php";

   // Conteúdo da página 
   if(isset($_GET['pagina'])){
      $pagina = $_GET['pagina'];   
   }else{
      $pagina = "home";   
   } 



   switch($pagina){

      case "home":{
         include "views/home.php";
         break;   
      }  

      case "candidatos":{
         include "views/candidatos.php";
         break;   
      }  

      case "vagas":{
         include "views/vagas.php";
         break;
      }
      
      case "empregados":{
         include "views/empregados.php";
         break;
      }

      case "inserir_vagas":{
         include "views/inserir_vagas.php";
         break;
      }

      case "inserir_empregados":{
         include "views/inserir_empregados.php";
         break;
      }

      
      case "inserir_candidatos":{
         include "views/inserir_candidatos.php";
         break;
      }  

      case "login":{
         include "views/login_page.php";
         break;
      } 

      case "ver_vagas":{
         include "views/ver_vagas.php";
         break;
      } 

      case "ver_candidatos":{
         include "views/ver_candidatos.php";
         break;
      }  

      default:{
         include "views/home.php";
         break;
      }

   }

   // Rodapé    
   include "footer.php";

?>