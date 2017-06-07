
<?php
if($_GET){
include "cabecalho.php ";
include "menu.php";

$produto = $_GET['plano'];

session_start();
$_SESSION['p'] = $produto;


$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");

$SQL = "SELECT nome, km_guincho, coberturaP, cobertura3,carroR,sVidro, sLanterna, dataInicio,
               dataFim, valor, descricao1, descricao2, img1, img2, img3 
           FROM plano
           WHERE nome ='$produto'";

$resultado = $conexaoBanco->query($SQL);

$prod = $resultado->fetchAll();

?>

<div class="jumbotron" style="background-image: url('<?php echo $prod[0]['img3']; ?>')">
    <br/>
    <br/>
    <div class="container">
        <h2> Plano <?php echo $prod[0]['nome'] ?></h2>
        <p><a class="btn btn-lg btn-primary" href="compra.php"
              role="button">Comprar</a></p>
    </div>
</div>
<div class="container">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-7">
            <h4 class="featurette-heading">Coberturas</span></h4>
            <p class="lead">Guincho: <?php echo $prod[0]['km_guincho']; ?>KM</p>
            <p class="lead">Valor cobertura Própria: <?php echo $prod[0]['coberturaP']; ?></p>
            <p class="lead">Valor cobertura Própria: <?php echo $prod[0]['cobertura3']; ?></p>
            <p class="lead">Carro Reserva: <?php echo $prod[0]['carroR']; ?></p>
            <p class="lead">Seguro dos Vidros: <?php echo $prod[0]['sVidro']; ?></p>
            <p class="lead">Seguro de Lanternas: <?php echo $prod[0]['sLanterna']; ?></p>
            <p class="lead">Período de Vigencia: <?php echo $prod[0]['dataInicio']; ?>
                à <?php echo $prod[0]['dataFim']; ?></p>
            <p class="lead">Valor: R$ <?php echo $prod[0]['valor']; ?></p>
        </div>
        <div class="col-md-5">
            <img src="<?php echo $prod[0]['img1']; ?>" class="featurette-image img-responsive center-block"
                 data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Voltado para </span></h2>
            <p class="lead"><?php echo $prod[0]['descricao1'] ?></p>
            <p class="lead"><?php echo $prod[0]['descricao2'] ?></p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img src="<?php echo $prod[0]['img2']; ?>" class="featurette-image img-responsive center-block"
                 data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <?php include "rodape.php";
    }else{
        header("location: produto.php");
    }
        
?>

