<style>
    .v{
        color:red;
    }
    .a{
        color:yellow;
    }
    .r{
        color:pink;
    }
    
</style>



<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])) {
        
        $cadastros = $_SESSION["cadastros"];
        
        echo "<dl>";
        foreach($cadastros as $produto) {
          $nomeProduto = $produto["nomeProduto"];
           $produtoNovo = $produto["produtoNovo"];
           $detalheProduto = $produto["detalheProduto"];
            
           
           if($produto != null) { 
               echo "<dt> ". $produto["nomeProduto"] . "</dt>";
                echo "<dd>Nome do Produto: " . $nomeProduto .  "</dd>";
                echo "<dd>Cor: " . $produto["cor"] .  "</dd>";
                echo "<dd>Detalhe do Produto: " . $produto["detalheProduto"] .  "</dd>"; 

                echo "<dd>Produto Novo: ";
                if($produto) {
                    echo "Sim";
                    
                }
                    else{
                        echo "Nao";
                    }
                        echo "</dd>";
            }
        }   
        echo "</dl>";
    }
    else{
        echo "Nao existem produtos disponiveis no momento. Por favor aguarde!";
        
    }

?>


