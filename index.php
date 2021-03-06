<!DOCTYPE html>
<html lang="en">
<title>Home - Reeduca</title>
<?php include "head.php"; ?>
<body class="home">

<?php include "header.php"; ?>


<!-- CARROSSEL DA PÁGINA HOME -->
<section class="carousel">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner imgcarrossel">
    <div class="carousel-item active">
      <img src="images/plastico_praia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/lacre_lata.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<!-- CONTEÚDO DA PÁGINA HOME -->
<section>
    <div class="home-page">
        <div class="conteudo-texto col-lg-4">
            <h2 style= "font-size: 2.5rem; text-align: initial; font-family: inherit; padding-bottom: 31px ">
            Educar para <i style="color: #73C72B; font-weight: bold;">renovar</i><br>
            nossos recursos naturais.</h2>
            <h5 style ="color: #73C72B; font-family: 'Cinzel', serif; font-size: 40px; text-align: -webkit-auto; text-decoration: overline;">Você tem o poder</h5>
            <p style="font-size: larger; font-family: 'Alegreya', serif; text-align: justify; line-height: 43px;">
            Se você acredita em um mundo saudável, pacífico, digno e justo para todos, então estamos ao seu lado para alcançá-lo, seja agindo nas ruas, na internet, em pequenas comunidades, nas grandes salas do poder ou nos locais mais remotos do planeta. Se tem ideias para chegarmos lá mais rápido, queremos aprender com você. Vamo sonhar, planejar e agir juntos.</p>
        </div>   
        <div class="comece col-lg-4">
            <button type="button" class="btn btn-success comece" onclick="javascript: location.href='remoney.php';">Comece hoje</button>
        </div>
        <div class="conheca col-lg-4">
            <a href="remoney.php"><img class="img-money" src="images/dinheirinho.png" alt="conheca-nosso-programa"></a>
        </div>  
    </div> 
</section>


<?php include "footer.php"; ?>
<?php include "funcoes.php"; ?>

</body>
</html>