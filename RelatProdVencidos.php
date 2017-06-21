<?php include "cabecalho.php ";?>
<?php include "menu.php ";

session_start();
if(isset($_SESSION['funcionario'])){
    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
    $SQL = "select * from plano
        WHERE dataFim < (select date('now'))";

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
    <h3><label>Planos Mais Vendidos</label></h3>
    <table border="1" align="center" style="font-size: 20px;">
        <tr >
            <td width="100px">
                Plano
            </td>
            <td width="250px">
                Data Inicio
            </td>
            <td width="250px">
                Data Fim
            </td>
            <td width="250px">
                Valor
            </td>
            </tr>
            <?php
                foreach ($prod as $p){
            ?> <tr>
                <td width="100px">
                    <?php echo $p['nome'] ?>
                </td>
                <td width="250px">
                    <?php echo date('d-m-Y', strtotime($p['dataInicio']));?>
                </td>
                <td width="250px">
                    <?php echo date('d-m-Y', strtotime($p['dataFim']));
                    ?>
                </td>
                <td width="250px">
                    <?php echo $p['valor'];
                    ?>
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

