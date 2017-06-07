<?php


function imprimi_item($titulo, $texto, $codProduto, $imagem){

    echo"<div class='col-xs-6 col-sm-3 placeholder'>
            <a href='descricao.php?plano=$titulo'>
            <img src='$imagem' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'></a>
            <h4>$titulo</h4>
            <p> $texto </p>

        </div>"; 
}

function getProdutos(){



    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
    $SQL = "SELECT nome, valor, descricao1, img1
           FROM plano";

    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();
    return $prod;
}
?>