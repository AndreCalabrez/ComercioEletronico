<?php include "cabecalho.php ";
      include "menu.php ";
 session_start();
    if(isset($_SESSION['usuario'])){
        
    ?> 

   
AREA do CLIENTE

<div class="jumbotron" style="background-image: url('_img/img15.jpg')">

    <div class="container" >
        <br/>
        <h2 style="color: white"><?php echo $_SESSION['usuario']; ?></h2>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <a href="ProcSair.php"> <img src="_img/logout.jpg"  height="80" width="170"> </a>
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Dados Pessoais</span></h2>
            <p class="lead">Dados Pessoais</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="_img/img11.jpg" alt="Generic placeholder image">
        </div>
    </div>
<div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Pedidos </span></h2>
            <p class="lead">Lista de Pedidos</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="_img/img16.jpg" alt="Generic placeholder image">
        </div>
    </div>
    <hr class="featurette-divider">

    <hr>
<?php 
  include "rodape.php";
}
    else{
        $_SESSION['op'] = 0; // opcao 0 se for para ir para a tela de Area do Cliente
        header("location: loginClienteAreaCliente.php");
    }

  ?>


