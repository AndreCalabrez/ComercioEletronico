
<?php include "cabecalho.php ";?>
<?php include "menu.php ";

$produto = $_GET['plano'];

?>
<br />
<div class="jumbotron" >

    <div class="container">
        <h2><?php echo $produto?></h2>
        <p><a class="btn btn-lg btn-primary" href="compra.php?plano=<?php echo $produto;?>" role="button">Comprar</a></p>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Coberturas</span></h2>
            <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Voltado para </span></h2>
            <p class="lead">Pessoas com pouca usabilidade do carro.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
    </div>

<!-- Main jumbotron for a primary marketing message or call to action -->
<?php include "rodape.php";?>

