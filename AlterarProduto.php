<?php include "cabecalho.php ";?>
<?php include "menu.php ";

$plano = $_GET['cod'];

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");

$SQLP = "SELECT *
           FROM plano
           WHERE cod_plano ='$plano'";

$resultado2 = $conexaoBanco->query($SQLP);

$prod2 = $resultado2->fetchAll();


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
    <form id="cadastro" method="post" action="AlterarProdutoProc.php">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <input type="hidden" name="cod" value="<?php echo $plano; ?>" required>
            <label>Plano <input type="text" name="plano" value="<?php echo $prod2[0]['nome']; ?>" required></label>
            <label>KM de Guincho <input type="text" name="kmGuincho" value="<?php echo $prod2[0]['km_guincho']; ?>" required></label>
            <label>Valor de Cobertura Própria<input type="number" step="0.01" name="coberturaP" min="0" required value="<?php echo $prod2[0]['coberturaP']; ?>"></label>
            <label>Valor de Cobertura à 3º <input type="number" step="0.01" name="cobertura3" min="0" required value="<?php echo $prod2[0]['cobertura3']; ?>"></label>
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
            <label>Data Inicio do Plano <input type="date" name="dataInicio" required value="<?php echo date('d-m-Y', strtotime($prod2[0]['dataInicio'])); ?>"></label>
            <label>Data Final do Plano <input type="date" name="dataFim" required value="<?php echo date('d-m-Y', strtotime($prod2[0]['dataFim'])); ?>"></label>
            <label>Valor do Plano <input type="number"  name="valor" step="0.01" min="10.00" required value="<?php echo $prod2[0]['valor']; ?>"></label>
            <label>Descrição-1 <textarea name="descricao1" required ><?php echo $prod2[0]['descricao1']; ?></textarea></label>
            <label>Descrição-2 <textarea name="descricao2" required ><?php echo $prod2[0]['descricao2']; ?></textarea></label>
            <label>Caminho da Imagem-1 <input type="text" name="img1" required value="<?php echo $prod2[0]['img1']; ?>"></label>
            <label>Caminho da Imagem-2 <input type="text" name="img2" required value="<?php echo $prod2[0]['img2']; ?>"></label>
            <label>Caminho da Imagem-3 <input type="text" name="img3" required value="<?php echo $prod2[0]['img3']; ?>"></label><br/>
            <input type="submit" onclick="alerta()">
        </div>
    </form>
    </div>
    <hr class="featurette-divider">
    <hr>
<?php include "rodape.php";?>


