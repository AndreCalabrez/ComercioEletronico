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
    <form id="cadastro" method="post" action="RegistrarCliente.php">
    <!-- Example row of columns -->
    <div class="row featurette">
        <div class="col-md-5">
            <label>Nome <input type="text" name="nome" required></label><br/>
            <label>Data Nasc. <input type="date" name="datanasc" required></label><br/>
            <label>Rua <input type="text" name="rua" required></label><br/>
            <label>Bairro <input type="text" name="bairro" required></label><br/>
            <label>Cidade <input type="text" name="cidade" required></label><br/>
            <label>Estado </label><select name="uf">
                    <option value="ES">Espirito Santo</option>
                    <option value="ES">Rio de Janeiro</option>
            </select><br/>
            <label>CPF <input type="text" name="cpf" required></label><br/>
            <label>Login <input type="text" name="login" required></label><br/>
            <label>Senha <input type="password" name="senha" required></label><br/>
            <input type="submit" value="Gravar" />
        </div>
    </form>
    </div>
    <hr class="featurette-divider">
    <hr>
<?php include "rodape.php";?>




