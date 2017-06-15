<?php include "cabecalho.php ";
include "menu.php ";
 session_start();
    if(isset($_SESSION['usuario'])){
$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");

        $cliente = $_SESSION['usuario'];

        $SQL = "SELECT idCliente, nome, dataNasc, rua, bairro, cidade, estado, cpf 
                  FROM cliente
                  WHERE login ='$cliente'";
        $resultado = $conexaoBanco->query($SQL);
        $prod = $resultado->fetchAll();


        $idC = $prod[0]['idCliente'];

        $SQL1 = "SELECT p.nome,                 
                       p.dataInicio,
                       p.dataFim,
                       c.fPagamento,
                       p.valor,
                       c.dataCompra,
                       c.valorP,
                       c.modeloV,
                       c.marcaV
                  FROM compra c,
                       plano p
                  WHERE c.codPlano = p.cod_plano
                    AND c.codCliente = '$idC'
                   ORDER BY c.codCompra desc;";
        $resultado1 = $conexaoBanco->query($SQL1);
        $prod1 = $resultado1->fetchAll();

?>



<!--
WHILE
<?php// while($prod = mysqli_fetch_array($query)) { ?>
    <option value="<?php //echo $prod['modelo']?> - <?php //echo $prod['marca']?>"><?php //echo $prod['modelo']?> - <?php //echo $prod['marca']?> </option>
<?php //} ?>

-->




AREA do CLIENTE

<div class="jumbotron" style="background-image: url('_img/img15.jpg')">

    <div class="container" >
        <br/>
        <h2 style="color: white"><?php echo $prod[0]['nome']; ?></h2>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <a href="ProcSair.php"> <img src="_img/logout.jpg"  height="80" width="170"> </a>
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Dados Pessoais</span></h2>
            <p class="lead">Nome <?php echo $prod[0]['nome']; ?></p>
            <p class="lead">Data Nascimento <?php echo $prod[0]['dataNasc']; ?></p>
            <p class="lead">CPF <?php echo $prod[0]['cpf']; ?></p>
            <p class="lead">Rua <?php echo $prod[0]['rua']; ?></p>
            <p class="lead">Bairro <?php echo $prod[0]['bairro']; ?></p>
            <p class="lead">Cidade <?php echo $prod[0]['cidade']; ?> - <?php echo $prod[0]['estado']; ?></p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="_img/img11.jpg" alt="Generic placeholder image">
        </div>
    </div>
<div class="row featurette">
        <div class="col-md-7 col-md-push-5">

            <h2 class="featurette-heading">Pedidos </span></h2>
            <?php foreach ($prod1 as $key => $value) {
                // $arr[3] será atualizado com cada valor de $arr...
            ?>
            <p class="lead">Plano: <?php echo $value['nome']; ?></p>
            <p class="lead">Modelo do Veiculo: <?php echo $value['modeloV']; ?></p>
            <p class="lead">Marca do Veiculo: <?php echo $value['marcaV']; ?></p>
            <p class="lead">Tempo de Vigencia: <?php echo $value['dataCompra']; ?> - <?php echo $value['dataFim']; ?></p>
            <p class="lead">Valor Total: <?php echo $value['valor']; ?></p>
            <p class="lead">Valor Parcelas: <?php echo $value['valorP']; ?></p>
                <hr/>
<?php  } ?>

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



