<?php include "cabecalho.php ";?>
<?php include "menu.php ";?>

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="_img/img1.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h3>Proteção ao Seu Veiculo</h3>

                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="_img/img2.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Segurança para as viagens em Familia</h1>
                    <p>Não estrague suas ferias por não ter um bom seguro, curta suas ferias sabendo que a +Seguro estará com você a todo momento </p>
                    <p><a class="btn btn-lg btn-primary" href="produto.php" role="button">Veja os Planos</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="_img/img3.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Não Fique no Caminho</h1>
                    <p>Você Trabalhador, não perca tempo de suas vendas com problemas no seu carro, deixe com a +Seguro <br/> Planos Especiais para Trabalhandores</p>
                    <p><a class="btn btn-lg btn-primary" href="descricao.php?plano=Intermediario" role="button">Veja Aqui</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="sr-only">Next</span>
    </a>
</div><!-- /.carousel -->
<div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-6">
            <img  src="_img/img12.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Seja um segurado +Seguro</h2>
            <p>Com os melhores planos para estar sempre com você a todos os seus momentos</p>
            <p><a class="btn btn-default" href="produto.php" role="button">Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-6">
            <img  src="_img/img14.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Promoção</h2>
            <p>Fique por dentro de todas as nossas promoções, procurando sempre o melhor para você cliente</p>
            <p><a class="btn btn-default" href="promocao.php" role="button">Detalhes &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

<?php include "rodape.php";?>


