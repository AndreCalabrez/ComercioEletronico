<?php include "cabecalho.php ";?>
<?php include "menu.php ";

session_start();
if(isset($_SESSION['funcionario'])){
    $cliente = $_POST['cliente'];
    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
    $SQL = "SELECT  c.nome, 
               p.nome as plano,
               co.valor ,
               co.modeloV
    FROM plano p,
                compra co,
                cliente c
    WHERE c.idCliente = co.codCliente
         and co.codPlano = p.cod_plano
         and c.idCliente = $cliente";

    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();
?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron" >
    <br />
    <div class="container">
        <h2>Relatório</h2>
    </div>
</div>

<div class="container">
    <h3><label>Cliente: <?php if(count($prod)>0) {
            echo $prod[0]['nome'];
            }else{
                echo "Esse Cliente não possui compras";
            }; ?></label></h3>
    <table border="1" align="center" style="font-size: 20px;">
        <tr >
            <td width="100px">
                Plano
            </td>
            <td width="100px">
                Valor
            </td>
            <td width="100px">
                Veiculo
            </td>
            </tr>
            <?php
                foreach ($prod as $p){
            ?> <tr>
                <td width="100px">
                    <?php echo $p['plano'] ?>
                </td>
                <td width="100px">
                    <?php echo $p['valor'] ?>
                </td>
                <td width="100px">
                    <?php echo $p['modeloV'] ?>
                </td>
            <?php } ?>
        </tr>


    </table>
    </div>



    <hr class="featurette-divider">

    <hr>

<?php include "rodape.php";
}
else{
    $_SESSION['op'] = 0; // opcao 0 se for para ir para a tela de Area do Cliente
    header("location: loginFuncionario.php");
}

?>

