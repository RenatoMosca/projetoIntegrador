<!DOCTYPE html>
<html lang="en">
<title>Blog - Reeduca</title>
<?php include "head.php"; ?>

<body>

    <?php include "header.php"; ?>



    <main class="container">

        <section class="blog row">
            
<!--Coluna lado esquerdo-->

            <div class="textoBlog col-lg-3">
                <h3>Blog</h3>
                
                <p>Se você acredita em um mundo saudável, pacífico, digno e justo para todos, então estamos ao seu lado
                    para alcançá-lo, seja agindo nas ruas, na internet, em pequenas comunidades, nas grandes salas do
                    poder ou nos locais mais remotos do planeta. Se tem ideias para chegarmos lá mais rápido, queremos
                    aprender com você. Vamo sonhar, planejar, e agir juntos.</p>
            </div>



            
            <div class="posts col-lg-6 ">

<!--Primeiro Card do Blog-->
<div class="row"> 
                <div class="card_blog">
                    <img src="images/card_blog_1.jpg"  class="card-img-top" alt="Reciclagem">
                    <div class="card-body">
                        <h5 class="card-title">Reciclar pra quê</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                    </div>
                    
                </div>
                </div>

<!--Segundo Card do Blog-->
<div class="row"> 
                <div class="card_blog">
                    <img src="images/card_blog_2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Canudos biodegradáveis</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                    </div>
                    
                </div>
                </div>
<!--Terceiro Card do Blog-->
<div class="row"> 
                <div class="card_blog">
                    <img src="images/card_blog_3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                    </div>
                   
                </div>
            </div>
            </div>
<!--Coluna lado direito-->

            <div class="contato col-lg-3">

            <div class="tituloForm">
            <p> FIQUE POR DENTRO</p>
            </div>
            <div class="subtitulo"> 
            <article>Escreva-se e receba nossa Newsletter</article>
            </div>

                <form class="form_contato container col-lg-12">
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                    </div>


                    <div class="form-group">
                        <label for="nome"></label>
                        <input type="text" class="form-control" id="nome" placeholder="Digite seu nome">
                    </div>

                    <div class="botao_contato">
                     
                    <button  type="button" class="btn btn-secondary">Enviar</button>
                    </div>
                </form>
            </div>


        </section>
       
    </main>
    <?php include "footer.php"; ?>
    <?php include "funcoes.php"; ?>
    </body>
    </html>
  