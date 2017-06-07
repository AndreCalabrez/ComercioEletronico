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
    <form id="cadastro" method="post" action="RegistrarFuncionario.php">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <label>Nome <input type="text" name="nome" required></label><br/>
            <label>Login <input type="text" name="login" required></label><br/>
            <label>Senha <input type="password" name="senha" required></label><br/>
            <input type="submit" value="Gravar" />
        </div>
    </form>
    </div>
    <hr class="featurette-divider">
    <hr>
<?php include "rodape.php";?>



