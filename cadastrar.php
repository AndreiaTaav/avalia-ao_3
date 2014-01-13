<?php
    require_once("menu.php");
    
    session_start();
    
    if(!isset($_SESSION["cadastros"])) {
        
        $_SESSION["cadastros"] = array();
     }
    
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
    
    
    
    array_push($_SESSION["cadastros"], $produto);
    
    echo "Cadastro executado com exito. Aguarde a chegada do produto!";

?>
