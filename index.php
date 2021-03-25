<!doctype html>
<html lang="es">
  <head>
    <title>AniMap</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="librerias/bootstrap.min.css">
    <link rel="stylesheet" href="librerias/fontawesome/css/all.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <?php
        include "navegacion.php";
      ?>
    </div>
    <div class="container">
      <div class="row">
          <div class="col-sm-8 text-center offset-sm-2">
            <h1>Bienvenidos</h1>
          </div>
          <div class="col-sm-8 text-justify offset-sm-2">
            <p>
              En esta pagina encontraran recomendaciones de anime los generon del anime y su historia del anime al igual que les recomendaremos
              algunas paginas donde podran encontrar los animes que les recomendamos, tambien podras encontrar datos curiosos sobre algunos animes 
              fechas de estreno de peliculas y animes que esten en transmision los proximos episodios, junto con una lista de animes con los cuales podras
              iniciar en este mundo del anime
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col">
          <div class="card-group">
              <div class="card">
                <img class="card-img-top" src="img/generos anime.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Generos</h5>
                  <p class="card-text">En la seccion de generos entontraras diversos generos y una breve descripcion para ver cual es tu genero preferido</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/noticias.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Noticias</h5>
                  <p class="card-text">En la seccion de noticias que encontraras en la parte superior de nuestra pagina encontraras diversas noticias tanto de anime como de manga y sobre japon</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
              <div class="card">
                <img class="card-img-top" src="img/r.jpg" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Recomendaciones</h5>
                  <p class="card-text">En nuestra seccion de recomendaciones encontraras un catalo de animes que ya se han visto por nuestra comunidad y esperamos a ti tambien te gusten.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
    <div class="container-fluid" >
      <?php
        include "footer.php";
      ?>
    </div>
    <script src="librerias/jquery-3.2.1.slim.min.js"></script>
    <script src="librerias/popper.min.js"></script>
    <script src="librerias/bootstrap.min.js"></script>
  </body>
</html>