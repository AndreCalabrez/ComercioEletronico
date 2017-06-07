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

$_SESSION['nome'] = $prod[0]['nome'];
?>
<!-- Main jumbotron for a primary marketing message or call to action -->

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
            <a href="ProcSair.php"> <img src="_img/logout.jpg"  height="80" width="170"> </a>
            <table >
                <tr>
                   <td colspan="2"><h4> Dados do Veiculo </h4></td>
                </tr>
                <tr>
                    <td><label> Modelo </td>
                    <td><input type="text" name="modelo"></label></td>
                </tr>
                <tr>
                    <td><label> Marca </td>
                    <td><input type="text" name="marca"></label></td>
                </tr>
                <tr>
                    <td><label> Ano Fabricação </td>
                    <td><input type="number" min="1950" name="anoF"></label></td>
                </tr>
                <tr>
                    <td><label> <label> Ano Modelo </td>
                    <td><input type="number" min="1950" name="anoM"></label></td>
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
                            <option value="av">A vista</option>
                            <option value="ct">Cartão de Credito</option>
                            <option value="bb">Boleto Bancario</option>
                    </td>
                <tr>
                    <td><label> Valor</td>
                    <td><input type="number" value="" name="valor"></label></td>
                </tr>
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


