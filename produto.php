<?php include "cabecalho.php ";?>
<?php include "menu.php ";
require_once "funcoes.php";
?>
<link href="dist/css/meuEstilo.css" rel="stylesheet">

<div class="jumbotron" >
    <br />
    <div class="container">
        <h2>Escolha o Melhor para seu Carro </h2>
    </div>
</div>

<div class="container">
    <div class="starter-template">
        <h1>A Melhor Segurança Para o Seu Veiculo</h1>        
        <br />
        <br />
    </div>
<br />
        <?php
        $cont = 0;
        foreach (getProdutos() as $p){
            $cont++;
            if($cont == 1){
                echo "<div class=\"row placeholders\">";
            }
          //  echo $p["nome_produto"];
            imprimi_item($p["nome"],$p["descricao1"], $p["valor"],$p["img1"]);
            if($cont == 4){
                echo "</div><!--/row-->";
                $cont =0;
            }
        }
        if($cont != 0){
            echo "</div><!--/row-->";
        }

        ?>

</div><!-- /.container -->

    <div class="table-responsive">

    </div>

    <hr>

    <!-- FOOTER -->
<?php include "rodape.php";?>

