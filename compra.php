<?php include "cabecalho.php ";
include "menu.php ";
      session_start();
      if(isset($_SESSION['usuario'])){
          $cliente = $_SESSION['usuario'];
          $produto = $_SESSION['p'];

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");

$SQL = "SELECT nome
           FROM cliente
           WHERE login ='$cliente'";

$resultado = $conexaoBanco->query($SQL);

$prod = $resultado->fetchAll();


$SQLP = "SELECT valor
           FROM plano
           WHERE nome ='$produto'";

$resultado2 = $conexaoBanco->query($SQLP);

$prod2 = $resultado2->fetchAll();

$_SESSION['nome'] = $prod[0]['nome'];


?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<script type="text/javascript">
    function calcParcelas() {

        n1 = document.getElementById('valor').value;
        n2 = document.getElementById('qp').value;
        result = n1/n2;

        document.getElementById('result').value = result;
        return false;

    }

</script>
<div class="jumbotron" >
    <br />
    <div class="container">
        <h2>Kit <?php echo $produto ?></h2>
        <h2><?php echo $prod[0]['nome'];?></h2>
    </div>
</div>

<div class="container">
    <form id="compra"  method="post" action="RegistrarCompra.php">
    <!-- Example row of columns -->
    <div class="row featurette">

        <div class="col-md-5">
            <a href="ProcSairCliente.php"> <img src="_img/logout.jpg" height="80" width="170"> </a>
            <table >
                <tr>
                   <td colspan="2"><h4> Dados do Veiculo </h4></td>
                </tr>
                <tr>
                    <td><label> Modelo </td>
                    <td><input type="text" name="modelo" required></label></td>
                </tr>
                <tr>
                    <td><label> Marca </td>
                    <td><input type="text" name="marca" required></label></td>
                </tr>
                <tr>
                    <td><label> Ano Fabricação </td>
                    <td><input type="number" min="1950" name="anoF" required></label></td>
                </tr>
                <tr>
                    <td><label> <label> Ano Modelo </td>
                    <td><input type="number" min="1950" name="anoM" required></label></td>
                </tr>

            </table>
        </div>
        <div class="col-md-5">
            <table>
                <tr>
                    <td colspan="2"> <h4> Dados do Pagamento </h4></td>
                </tr>
                <tr>
                    <td>Forma de Pagamento</td>
                    <td><select name="fp">
                            <option value="di">Dinheiro</option>
                            <option value="cc">Cartão de Credito</option>
                            <option value="bb">Boleto Bancario</option>
                    </td>
                </tr>
                <tr>
                    <td><label> Valor</td>
                    <td><input type="number" value="<?php echo $prod2[0]['valor'] ?>" name="valor" id="valor" readonly></label></td>
                </tr>
                <tr>
                    <td><label> Quantidade de Parcelas</td>
                    <td><input type="number" value="" name="parcelas" id="qp" min="1" max="12" required></label></td>
                </tr>
                <tr>
                    <td><input type="button" value="Calcular Parcelas" onclick="calcParcelas()"></label></td>
                </tr>
                <tr>
                    <td><label> Valor da Parcelas</td>
                    <td><input type="text" value="" name="Vparcelas" id="result" readonly required/></label></td>
                </tr>
            </table>
            <input type="submit" value="GRAVAR">

        </div>
    </form>
    </div>



    <hr class="featurette-divider">

    <hr>
<?php
include "rodape.php";
}
else{
    $_SESSION['op'] = 1; // opcao 0 se for para ir para a tela de Area do Cliente
    header("location: loginClienteAreaCliente.php");
}

?>



