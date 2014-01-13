<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        
        echo "Nao existem produtos para editar.";
     }
        else{
            $id = $_REQUEST["id"];
            $nomeProduto = $_REQUEST["nomeProduto"];
            $produtoNovo = $_REQUEST["produtoNovo"];
            $cor = $_REQUEST["cor"];
            $prazoEntrega = $_REQUEST["prazoEntrega"];
            $detalheProduto = $_REQUEST["detalheProduto"];
           
        

            
            $produtoNovo = false;
                if(isset($_REQUEST["produtoNovo"])) {
            $produtoNovo = true;
            }
            
           $produto = array();
           $produto["nomeProduto"] = $nomeProduto;
           $produto["produtoNovo"] = $produtoNovo;
           $produto["cor"] = $cor;
           $produto["prazoEntrega"] = $prazoEntrega;
           $produto["detalheProduto"] = $detalheProduto;
    
            $cadastros =& $_SESSION["cadastros"];
            $cadastros[$id] = $produto;
        echo "Ediçao realizada com exito!";

        
        }
    

?>
