<?php include "cabecalho.php ";?>
<?php include "menu.php ";
$produto = $_GET['plano'];

?>
<!-- Main jumbotron for a primary marketing message or call to action -->
<br />
<div class="jumbotron" >

    <div class="container">
        <h2>Kit <?php echo $produto ?></h2>
    </div>
</div>

<div class="container">
    <form id="abc">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <h3>Dados do Cliente</h3>
                <label>Nome <input type="text"></label>
                <label>Endereço <input type="text"></label>
        </div>
        <div class="col-md-5">
            <h4> Dados do Veiculo </h4>
                <label> Modelo <input type="text"></label>
                <label> Marca <input type="text"></label>
                <label> Ano Fabricação <input type="text"></label>
                <label> Ano Modelo <input type="text"></label>
        </div>
        <div class="col-md-5">
            <h4> Dados do Pagamento </h4>
                <label> Forma de Pagamento <input type="text"></label>
        </div>
    </form>
    </div>



    <hr class="featurette-divider">

    <hr>

<?php include "rodape.php";?>


