
<?php include "cabecalho.php ";?>
<?php include "menu.php ";?>

<!-- Main jumbotron for a primary marketing message or call to action -->
<br />
<div class="jumbotron" >

    <div class="container">
        <h2>Simulador</h2>
    </div>
</div>

<div class="container">
    <form id="abc">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <label>Veiculo
                <select name="cars">
                    <option value="carro">Carro</option>
                    <option value="moto">Moto</option>
                    <option value="motoemoto">Carro e Moto</option>
                </select></label><br />
            <label>Km Quincho
                <select name="cars">
                    <option value="carro">0</option>
                    <option value="moto">150</option>
                    <option value="motoemoto">300</option>
                    <option value="motoemoto">500</option>
                </select></label><br />
            <label>Valor Cobertura Propria <input type="text"></label><br />
            <label>Valor Cobertura 3º <input type="text"></label><br />
            <label>Carro Reserva
                <select name="cars">
                    <option value="carro">Sim</option>
                    <option value="moto">Não</option>
                </select></label><br />
            <label>Seguro Vidros
                <select name="cars">
                    <option value="carro">Sim</option>
                    <option value="moto">Não</option>
                </select></label><br />
            <label>Seguro Lanternas
                <select name="cars">
                    <option value="carro">Sim</option>
                    <option value="moto">Não</option>
                </select></label><br />
            <label>Possui Garagem
                <select name="cars">
                    <option value="carro">Sim</option>
                    <option value="moto">Não</option>
                </select></label><br />
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
