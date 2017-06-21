<?php

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
if($_POST){
    $cod = $_POST['cod'];
    $plano = $_POST['plano'];
    $kmGuincho = $_POST['kmGuincho'];
    $coberturaP = $_POST['coberturaP'];
    $cobertura3 = $_POST['cobertura3'];
    $carroR = $_POST['carroR'];
    $sVidro = $_POST['sVidro'];
    $sLanterna = $_POST['sLanterna'];
    $dataInicio = $_POST['dataInicio'];
    $dataFim = $_POST['dataFim'];
    $valor = $_POST['valor'];
    $desc1 = $_POST['descricao1'];
    $desc2 = $_POST['descricao2'];
    $img1 = $_POST['img1'];
    $img2 = $_POST['img2'];
    $img3 = $_POST['img3'];

   $datai = date('Y-m-d', strtotime($dataInicio));
   $dataf = date('Y-m-d', strtotime($dataFim));


    $stmt = $conexaoBanco->prepare("UPDATE plano 
                                                  SET nome = ?,
                                                      km_guincho = ?,
                                                      coberturaP = ?,
                                                      cobertura3 = ?,
                                                      carroR = ?,
                                                      sVidro = ?,
                                                      sLanterna = ?,
                                                      dataInicio = ?,
                                                      dataFim = ?,
                                                      valor = ?,
                                                      descricao1 = ?,
                                                      descricao2 = ?,
                                                      img1 = ?,
                                                      img2 = ?,
                                                      img3= ?
                                              WHERE cod_plano = ?");

    $stmt->bindParam(1, $plano);
    $stmt->bindParam(2, $kmGuincho);
    $stmt->bindParam(3, $coberturaP);
    $stmt->bindParam(4, $cobertura3);
    $stmt->bindParam(5, $carroR);
    $stmt->bindParam(6, $sVidro);
    $stmt->bindParam(7, $sLanterna);
    $stmt->bindParam(8, $datai);
    $stmt->bindParam(9, $dataf);
    $stmt->bindParam(10, $valor);
    $stmt->bindParam(11, $desc1);
    $stmt->bindParam(12, $desc2);
    $stmt->bindParam(13, $img1);
    $stmt->bindParam(14, $img2);
    $stmt->bindParam(15, $img3);
    $stmt->bindParam(16, $cod);

    $stmt->execute();

    header("location: gerenciar.php");
}

?>