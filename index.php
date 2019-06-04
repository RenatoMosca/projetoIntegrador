<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Reeduca</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body{
                 
        }
        
        section.fundo{
            height: 460px; 
            
        }
        .cx-esquerda{
            height: 450px;
            
        }
        .cx-direita{
            height: 450px;
            background-image: url("images/fundo-home.png");
            background-size: 700px 500px;
            background-position: center; 
            background-repeat: no-repeat;
        }
        .conteudo-texto{
            margin-top: 90px;
        }
        .comece{
            /* top: 0; */
        }
        footer{
            height: 110px;
            background-color: #73C72B;
            margin: 0 auto;

        }
        .img-money{
            height: 110px;
        }

            
        
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<section class="fundo col-lg-12">
    <div class="row">
        <div class="cx-esquerda col-lg-6">
            <div class="conteudo-texto col-lg-12">
                <h3>Educar para <i>renovar</i><br>nossos recursos naturais.</h3>
                <h4>Você tem o poder</h4>
                <p>Se você acredita em um mundo saudável, pacífico, digno e justo para todos, então estamos ao seu lado para alcançá-lo, seja agindo nas ruas, na internet, em pequenas comunidades, nas grandes salas do poder ou nos locais mais remotos do planeta. Se tem ideias para chegarmos lá mais rápido, queremos aprender com você. Vamo sonhar, planejar, e agir juntos.</p>
            </div>
            <div class="conteudo-base col-lg-8">
                <div class="row">
                    <div class="comece col-lg-4">
                        <button type="button" class="btn btn-success comece">Success</button>
                    </div>
                    <div class="conheca col-lg-4">
                        <img class="img-money" src="images/dinheirinho.png" alt="conheca-nosso-programa">
                    </div>
                </div>
            </div>
        </div>
            <div class="cx-direita col-lg-6"></div>        
    </div>
    </section>
    <footer>

    </footer>
</body>
</html>