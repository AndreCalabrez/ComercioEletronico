<?php

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
if($_POST){
    session_start();
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $anoF = $_POST['anoF'];
    $anoM = $_POST['anoM'];
    $fp = $_POST['fp'];
    $valorT = $_POST['valor'];
    $qtdParcelas = $_POST['parcelas'];
    $valorP = $_POST['Vparcelas'];


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

    $data = date('d/m/Y');
    $stmt = $conexaoBanco->prepare("INSERT INTO compra (codPlano, codCliente, fPagamento, valor, valorP, qtdParcelas, dataCompra,
                                                  modeloV, marcaV, anoF, anoM) 
                                                VALUES (?,?,?,?,?,?,?,?,?,?,?)");


    $stmt->bindParam(1, $prod[0]['cod_plano']);
    $stmt->bindParam(2, $prod1[0]['idCliente']);
    $stmt->bindParam(3, $fp);
    $stmt->bindParam(4, $valorT);
    $stmt->bindParam(5, $valorP);
    $stmt->bindParam(6, $qtdParcelas);
    $stmt->bindParam(7, $data);
    $stmt->bindParam(8, $modelo);
    $stmt->bindParam(9, $marca);
    $stmt->bindParam(10, $anoF);
    $stmt->bindParam(11, $anoM);



    $stmt->execute();

    header("location: compraSucesso.php");
}


?>



