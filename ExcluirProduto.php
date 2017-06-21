<?php

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");


    $plano = $_GET['cod'];

    echo $plano;


    $stmt = $conexaoBanco->prepare("DELETE FROM plano 
                                                 WHERE cod_plano = ?");

        $stmt->bindParam(1, $plano);

    $stmt->execute();

    header("location: listarProduto.php");

?>