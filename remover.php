<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        
        echo "Nao existem produtos para remover.";
     }
        else{
            $id = $_REQUEST["id"];
           
    
            $cadastros =& $_SESSION["cadastros"];
            $cadastros[$id] = null;
        echo "Remocao executada com exito. Cadastre outro produto!";

        
        }
    

?>
