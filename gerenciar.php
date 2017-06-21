<?php include "cabecalho.php ";?>
<?php include "menu.php ";
session_start();
if(isset($_SESSION['funcionario'])){


    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
    $SQL = "SELECT idCliente, nome
           FROM cliente";

    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();
?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron" >
    <br />
    <div class="container">
        <h2>Cadastrar</h2>
    </div>
</div>

<div class="container">
    <a href="ProcSairFuncionario.php"> <img src="_img/logout.jpg" height="80" width="170"> </a>
    <form id="cadastro" method="post" action="RelatVendasPorCliente.php">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <a href="cadastrarFuncionario.php"> Cadastrar Funcionario</a><br/>
            <a href="cadastrarProduto.php"> Cadastrar Produto</a><br/>
            <a href="listarProduto.php"> Listar Produtos</a><br/>
            <hr>
            <h3>Relatorios</h3>
            <a href="RelatProdMaisVendidos.php">Planos Mais Vendidos</a><br/>
            <a href="RelatProdVencidos.php">Planos Vencidos</a>
            <hr>
            <p>Vendas por Cliente:
            <select name="cliente">
                    <?php   foreach ($prod as $p) { ?>
                        <option value="<?php echo $p['idCliente']?>"><?php echo $p['nome']?> </option>
                    <?php } ?>
                </select>
            <input type="submit" value="Relatorio de Cliente">
        </div>

    </form>
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


