<!DOCTYPE html>
<html lang="en">
<head>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/leaflet/1/leaflet.js"></script>
  <script src="js/maps.js"></script>
  <!-- <script src="js/testimonios.js"></script> -->
  <script src="js/traductor.js"></script>
  <script src="js/sss.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/leaflet/1/leaflet.css" /> 
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/testis.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explora El Salvador</title>
      <link rel="icon" type="image/png" href="LoginPTC/images/logoicono.png">    
   
</head>
<body>
<style type="text/css">
  body{
    top: 0  !important;
    }
    .goog-te-banner-frame{
      display: none;
        }
</style>  
<nav class="navbar  navbar-expand-sm navbar-dark bg-primary">
  <a class="navbar-brand" href="#" style="font-size: 130%;">El Salvador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="catsES.php">Categorías</a>
      </li>
        
 
      <?php session_start(); 

      if(isset($_SESSION['usuario'])){
        echo "
        <li class='nav-item'>
              <a class='nav-link' href='cerrarSesion.php'>Cerrar Sesión</a>
        </li>
        ";

        if(isset($_SESSION['rolid']) && $_SESSION['rolid'] == 1){
          echo"
          <li class=\"nav-item dropdown\">
          <a class=\"nav-link dropdown-toggle\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            Gestionar
          </a>
          <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                <a class=\"dropdown-item\"  href=\"addSites.php\">Añadir Sitios</a>
                <a class=\"dropdown-item\" href=\"PAQUETEes/paquete.html\">Crear Paquetes</a>
                <a class=\"dropdown-item\" href=\"editSitios.php\">Modificar Sitios</a>
                <a class=\"dropdown-item\" href=\"editCats.html\">Crear Categorías</a>
                
         </div>
          </li>
          ";
        }else{
          echo "";
        }
        }else{
          echo"
          
                  <li class=\"nav-item\">
                  <a class=\"nav-link\"  href=\"login.php\">Iniciar Sesión</a>
                  </li>
                  <li class=\"nav-item\">
                  <a class=\"nav-link\" href=\"registro.php\">Registrarse</a>
                  </li>
          ";
       } 
      ?>

      <li class="nav-item">
        <a class="nav-link" href="home.php">Paquetes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../PTCen">Inglés</a>
      </li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 

      <?php 
      include('Backend/db.php');
      if (isset($_SESSION['usuario']))
      {
        $usuario = mysqli_real_escape_string($connection, utf8_decode($_SESSION['usuario']));
        
        echo "
        <li class=\"nav-item\">
        <a class=\"nav-link\">$usuario</a>
        </li>";

        echo "<img src=\"Fotos/user3.png\" style=\"width:3%;\">";
      }
      ?>
      
  </div>
</nav>
<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
    <li data-target="#carousel-example-2" data-slide-to="3"></li>
    <li data-target="#carousel-example-2" data-slide-to="4"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100 slider-slide" src="Fotos/tazumal.jpg"
          alt="First slide" width="400 px" height="500 px" >
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
          <h3 class="h3-responsive" style="color:#FFF">Tazumal</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide" src="Fotos/eltincoo.jpg"
          alt="Second slide" width="400 px" height="500 px">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
          <h3 class="h3-responsive" style="color:#FFF">El Tunco</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide" src="Fotos/Coatepeque.jpg"
          alt="Third slide" width="400 px" height="500 px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive" style="color:#FFF">Lago de Coatepeque</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide" src="Fotos/cerroVerde.jpg"
          alt="Third slide" width="400 px" height="500 px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive" style="color:#FFF">Cerro Verde</h3>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100 slider-slide" src="Fotos/zonte.jpg"
          alt="Third slide" width="400 px" height="500 px">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive" style="color:#FFF">Playa El Zonte</h3>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<br><br><br><br>


    <!--Carousel Wrapper-->
    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

      <!--Controls-->
      <div class="buttons">
        <center>
      <button class="btn-prev" href="#multi-item-example" data-slide="prev">&larr;</button>
      <button class="btn-next" href="#multi-item-example" data-slide="next">&rarr;</button>
      </center>
      <br>
    </div>
    <style type="text/css">
      .btn-prev,
.btn-next {
  width: 60px;
  height: 60px;
  margin-left: 10px;
  border: none;
  outline: none;
  border-radius: 60px;
  color: #FFFFFF;
  background: -webkit-linear-gradient(top, #2D2E2E, #2D2E2E);
  background: linear-gradient(to bottom, #2D2E2E, #2D2E2E);
  box-shadow: 0px 3px 15px 2px;
  cursor: pointer;
}

    </style>
    <br><br>
      <!--/.Controls-->

      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        <li data-target="#multi-item-example" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">

          <div class="row">
            <div class="col-md-4 cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/eltiunco.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Playas</h4><br>
                  <p class="card-text line-clamp" align="justify">El Salvador es uno de los destinos de Centroamérica que cuenta con hermosas playas que se adaptan a todo tipo de turistas.</p>
                  <a class="btn btn-primary" style="color: #FFF" href="mostrarSitios.php?cat=playa">Ver más</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/coate.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title " align="center">Lagos y Lagunas</h4><br>
                  <p class="card-text line-clamp" align="justify">Los Lagos y Lagunas de El Salvador te ofrecen todas las herramientas para deshacerte del estrés.</p>
                  <br>
                  <a  class="btn btn-primary" href="mostrarSitios.php?cat=lagos y lagunas" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/sanantonio.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Montañas</h4><br>
                  <p class="card-text line-clamp" align="justify">El relieve de El Salvador es fascinante y constituye uno de los principales encantos de este pequeño pero al mismo tiempo gran país.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=montañas" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/arqueo.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Sitios Arqueologicos</h4><br>
                  <p class="card-text line-clamp" align="justify">Se refiere al proceso donde la gente viaja a lugares históricos o arqueológicos de interés. </p>
                  <br>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=sitios arqueologicos" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/necro.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Necroturismo</h4><br>
                  <p class="card-text line-clamp" align="justify">El  Necroturismo es la nueva moda en muchos países de Latino América y ahora también lo es en El Salvador. </p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=necroturismo" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/agro.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Agroturismo </h4><br>
                  <p class="card-text line-clamp" align="justify">Es aquel tipo de turismo enfocado a descubrir y disfrutar de los entornos rurales y naturales que rodean al ser humano.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=agroturismo" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Second slide-->

        <!--Third slide-->
        <div class="carousel-item">

          <div class="row">
            <div class="col-md-4 cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/eco.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Ecoturismo </h4><br>
                  <p class="card-text line-clamp" align="justify">Esta es una iniciativa de desarrollo sostenible, que mediante el ordenamiento territorial con base a las áreas naturales interconectadas por actividades.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=ecoturismo" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/etno.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Etnoturismo</h4><br>
                  <p class="card-text line-clamp" align="justify">Es el turismo especializado y dirigido que se realiza en territorios de los grupos étnicos con fines culturales, educativos y recreativos.</p>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=etnoturismo" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>

            <div class="col-md-4 clearfix d-none d-md-block cats-slides">
              <div class="card mb-2">
                <img class="card-img-top cats-slide" src="Fotos/comu.jpg"
                  alt="Card image cap" width="45 px" height="250"><br>
                <div class="card-body">
                  <h4 class="card-title" align="center">Turismo Comunitario</h4><br>
                  <p class="card-text line-clamp" align="justify">El turismo comunitario surge como una alternativa económica de las comunidades propias de un país.</p>
                  <br>
                  <a class="btn btn-primary" href="mostrarSitios.php?cat=turismo comunitario" style="color: #FFF">Ver más</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!--/.Third slide-->

      </div>
      <!--/.Slides-->

    </div>
    <!--/.Carousel Wrapper-->


  </div>
<br>
<div id="map-example-container"></div>
<input type="search" id="input-map" class="form-control" placeholder="Busca tu sitio ideal" />

<style>
  #map-example-container {height: 500px};
</style>

<script src="https://cdn.jsdelivr.net/npm/places.js@1.18.1"></script>
<div class="p-5" style="position: absolute">
  <script>
  maps();
</script>
</div>
<br><br><br><br>
<head>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<center>
<button class="btn-prev2" href="#client-testimonial-carousel" data-slide="prev">&larr;</button>
<button class="btn-next2" href="#client-testimonial-carousel" data-slide="next">&rarr;</button>
<br><br>
</center>
<div class="text-dark">
  <div id="client-testimonial-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active text-center p-4"  >
        <blockquote class="blockquote text-center" >
          <p class="mb-0"><i class="fa fa-quote-left"></i>" Gracias por tan buena página web, los paquetes tiene buen precio y el tiempo de respuesta en correo es inmediata. "
          </p>
          <footer class="blockquote-footer">Carlos Miranda </footer>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>" Gracias a ustedes pude encontrar las mejores playas en El Salvador. "
          </p>
          <footer class="blockquote-footer">Maria Abrego</footer>
        </blockquote>
      </div>
      <div class="carousel-item text-center p-4">
        <blockquote class="blockquote text-center">
          <p class="mb-0"><i class="fa fa-quote-left"></i>" Buena página web. "
          </p>
          <footer class="blockquote-footer">Julian Herrera</footer>
        </blockquote>
      </div>
    </div>
    <ol class="carousel-indicators">
      <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="1"></li>
      <li data-target="#client-testimonial-carousel" data-slide-to="2"></li>
    </ol>
  </div>
</div>
<style type="text/css">
  body { 
  margin: 0;
  padding: 0;
}
.btn-prev2,
.btn-next2 {
  width: 60px;
  height: 60px;
  margin-left: 10px;
  border: none;
  outline: none;
  border-radius: 60px;
  color: #FFFFFF;
  background: -webkit-linear-gradient(top, #2D2E2E, #2D2E2E);
  background: linear-gradient(to bottom, #2D2E2E, #2D2E2E);
  box-shadow: 0px 3px 15px 2px;
  cursor: pointer;
}
#client-testimonial-carousel {
  min-height: 200px;
}
</style>

<!-- Footer -->
 <footer class="section footer-classic context-dark bg-primary p-2"><!-- style="background: #2d3246;" -->
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light">  </a>  <!-- src="Images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="Images/agency/logo-retina-inverse-280x74.png 2x" -->
                <p style="color: #FFF">Nosotros somos una empresa sin fines de lucro que busca ayudar a los turistas que quieren visitar algunos lugares de El Salvador, brindándoles información sobre los lugares más interesantes y bonitos de este pequeño país.</p>
                <!-- Rights-->
                <p class="rights" style="color: #FFF"><span>©  </span><span class="copyright-year">2020</span><span> </span><span>SV Trip</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4 col-xl-3">
              <h5 style="color: #FFF">Contáctanos</h5>
              <dl class="contact-list">
                <dt style="color: #FFF">Dirección:</dt>
                <dd style="color: #FFF">Colegio Salesiano Santa Cecilia</dd>
              </dl>
              <dl class="contact-list">
                <dt style="color: #FFF">email:</dt>
                <dd><a href="mailto:#">trips.sv2020@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt style="color: #FFF">Teléfono:</dt>
                <dd><a href="#">1234-5678</a> <span style="color: #FFF">or</span> <a href="">9876-5432</a>
                </dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="https://www.instagram.com/tripssv/"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>googleTranslateElementInit()</script> 

</body>
</html>