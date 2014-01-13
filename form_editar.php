<html>
    <head>
        <title>Cadastros dos produtos. </title>
        
    </head>
    <body>
        <?php
            require_once("menu.php");
        ?>
        
        <form action = "editar.php" method = "post">
              <label>Digite o codigo do produto para editar :</label>
              <br/>
              <input type = "text" name = "id" />
              <br/>
              <?php require_once("campos_produtos.php"); ?>
              <input type = "submit" value = "Editar" />    
        
        </form>
    </body>
    
    
    
    
    
</html>

<?php
    require_once("menu.php");
    
    session_start();
    
    if(isset($_SESSION["cadastros"])) {
        
        $cadastros = $_SESSION["cadastros"];
        
        foreach($cadastros as $id => $produto) {
            if($produto != null) {
                echo "[$id] => " . $produto["nomeProduto"] .  "<br/>";
            }
        }   
    }
    else {
        echo "Nao existem produtos disponiveis no momento. Por favor aguarde!";
        
    }

?>
