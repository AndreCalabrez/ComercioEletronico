<?php include "cabecalho.php ";?>
<?php include "menu.php ";



?>
<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="jumbotron" >
    <br />
    <div class="container">
        <h2>Login</h2>
    </div>
</div>

<div class="container">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <form name="form1" method="post" action="ProcLoginFuncionario.php">
                <p>Login: <input name="login" type="text" value="" required></p>
                <p>Senha: <input name="senha" type="password" value="" required></p>

                <input name="enviar" type="submit" value="Logar">
            </form>
        </div>

    </form>
    </div>



    <hr class="featurette-divider">

    <hr>

<?php include "rodape.php";?>


