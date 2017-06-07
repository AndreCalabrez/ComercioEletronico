<?php

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
if($_POST){
    session_start();
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $anoF = $_POST['anoF'];
    $anoM = $_POST['anoM'];
    $fp = $_POST['fp'];
    $valor = $_POST['valor'];

    $cliente = $_SESSION['nome'];
    $plano = $_SESSION['p'];


    $SQL = "SELECT cod_plano 
           FROM plano
           WHERE nome ='$plano'";

    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();

echo $prod[0]['cod_plano'];

    $SQL1 = "SELECT idCliente
           FROM cliente
           WHERE nome ='$cliente'";

    $resultado1 = $conexaoBanco->query($SQL1);

    $prod1 = $resultado1->fetchAll();

    echo $prod1[0]['idCliente'];

    $stmt = $conexaoBanco->prepare("INSERT INTO compra ( codPlano, codCliente, fPagamento, valor) 
                                                VALUES (?,?,?,?)");


    $stmt->bindParam(1, $prod[0]['cod_plano']);
    $stmt->bindParam(2, $prod1[0]['idCliente']);
    $stmt->bindParam(3, $fp);
    $stmt->bindParam(3, $valor);

    $stmt->execute();

    header("location: compraSucesso.php");
}


?>
}


?>