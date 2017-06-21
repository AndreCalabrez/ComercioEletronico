<?php


function imprimi_item($nome, $valor, $descricao, $imagem, $cod_plano){

    echo"<div class='col-xs-6 col-sm-3 placeholder'>
            <a href='descricao.php?plano=$nome'>
            <img src='$imagem' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'></a>
            <h4>$nome</h4>
            <p> $valor </p>      
             <a href='ExcluirProduto.php?cod=$cod_plano'>EXCLUIR</a>
             <a href='AlterarProduto.php?cod=$cod_plano'>ALTERAR</a>

        </div>"; 
}

function getProdutos(){



    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
    $SQL = "SELECT cod_plano, nome, valor, descricao1, img1
           FROM plano";

    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();
    return $prod;
}
?>

