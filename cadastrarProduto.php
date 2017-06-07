<?php include "cabecalho.php ";?>
<?php include "menu.php ";
?>

<script>
    function alerta(){
        alert("Cadastrardo com Sucesso");
    }
</script>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron" >
    <br />
    <div class="container">
        <h2>Cadastrar</h2>
    </div>
</div>

<div class="container">
    <form id="cadastro" method="post" action="RegistrarProduto.php">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <label>Plano <input type="text" name="plano" required></label>
            <label>KM de Guincho <input type="text" name="kmGuincho" required></label>
            <label>Valor de Cobertura Própria<input type="number" step="0.01" name="coberturaP" min="0" required></label>
            <label>Valor de Cobertura à 3º <input type="number" step="0.01" name="cobertura3" min="0" required></label>
            <label>Carro Reserva <select name="carroR">
                    <option>Sim</option>
                    <option>Não</option>
                </select></label>
            <label>Seguro de Vidro <select name="sVidro">
                    <option>Sim</option>
                    <option>Não</option>
                </select></label>
            <label>Seguro de Lanterna <select name="sLanterna">
                    <option>Sim</option>
                    <option>Não</option>
                </select></label>
            <label>Data Inicio do Plano <input type="date" name="dataInicio" required></label>
            <label>Data Final do Plano <input type="date" name="dataFim" required></label>
            <label>Valor do Plano <input type="number"  name="valor" step="0.01" min="10.00" required></label>
            <label>Descrição-1 <textarea name="descricao1" required></textarea></label>
            <label>Descrição-2 <textarea name="descricao2" required></textarea></label>
            <label>Caminho da Imagem-1 <input type="text" name="img1" required></label>
            <label>Caminho da Imagem-2 <input type="text" name="img2" required></label>
            <label>Caminho da Imagem-3 <input type="text" name="img3" required></label><br/>
            <input type="submit" onclick="alerta()">
        </div>
    </form>
    </div>
    <hr class="featurette-divider">
    <hr>
<?php include "rodape.php";?>


