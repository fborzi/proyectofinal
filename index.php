<?php
  include '../proyectofinal/header.php';
?>
  <main>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" id = "slide1">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1 id="titulo1">Armamos tu PC GAMER</h1>
            <p id="subtito1">A medida.</p>
            <p><a class="btn btn-lg btn-primary" href="componentes.php">Ver mas.</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" id = "slide2">
        <div class="container">
          <div class="carousel-caption">
            <h1 id="titulo2">Todo en INSUMOS</h1>
            <p id="subtitulo2">Tintas, Cartuchos, Toners y Papel.</p>
            <p><a class="btn btn-lg btn-primary" href="impresion.php">Ver mas.</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" id = "slide3">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 id="titulo3">RIGs de Mineria</h1>
            <p id="subtitulo3">Proximamente.</p>
            <p><a class="btn btn-lg btn-primary disabled" href="#">Proximamente</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Columnas RUBROS debajo del carrusel -->
    <!-- Fila 1 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="../proyectofinal/almacenamiento.php">
          <img src="../proyectofinal/assets/images/1-almacenamiento.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Almacenamiento</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="#">
          <img src="../proyectofinal/assets/images/2-audio.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Audio</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="#">
          <img src="../proyectofinal/assets/images/3-autocar.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Audio Autos</h2>
          </div>
        </div>
        <!--<p>And lastly this, the third column of representative placeholder content.</p>-->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 2 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="#">
          <img src="../proyectofinal/assets/images/4-calculadora.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Calculadoras</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/6-celulares.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Celulares</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/7-componentes.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Componentes</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 3 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/8-computacion.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Computación</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/9-conectividad.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Conectividad</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/9-conectoresCables.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Conectores y Cables</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 4 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/10-contadoras.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Contadoras</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/11-electrohogar.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Electro Hogar</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/12-energia.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Energía</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 5 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/13-fotografia.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Fotografía</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="../proyectofinal/assets/images/14-fundasMochilas.png" alt="alt" height="250">
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Fundas y Mochilas</h2>
          </div>
        </div>    
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/15-iluminacion.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Iluminación</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 6 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/16-imagenPeriferico.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Imágen y Perifericos</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/17-impresion.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Impresión</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/18-accesoriosInstrumentos.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Accesorios de Instrumentos</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 7 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/19-instrumentosCuerda.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Instrumentos de Cuerda</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/21-instrumentosElectricos.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Instrumentos Eléctricos</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/21-instrumentosPercusion.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Instrumentos de Percusión</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 8 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/21-instrumentosViento.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Instrumentos de Viento</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/23-movilidad.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Movilidad</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/24-papeles.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Papeles</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 9 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/25-pilas.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Pilas</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/26-seguridad.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Seguridad</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/27-optica.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Óptica</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <!-- Fila 10 -->
    <div class="row">
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/28-sonidoPro.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Sonido PRO</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/29-videojuegos.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Video Juegos</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <a href="">
          <img src="../proyectofinal/assets/images/30-wearables.png" alt="alt" height="250">
        </a>
        <div class="container card">
          <div class="d-flex card-body justify-content-center">
            <h2 id="rubros">Wearables</h2>
          </div>
        </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div>
  </main>
<?php
  include '../proyectofinal/footer.php';
?>