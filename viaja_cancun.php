<!doctype html>
<html>

<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>T&W</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<link href="Css_1/styles.css" rel="stylesheet">
	<script src="js/Funciones.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="parallax.min.js"></script>

</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container"><a href="iniciosesion.php" class="navbar-brand">Travel&Wish</a>
        <button type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"
            class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div id="navbarResponsive" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="#" class="nav-link">Reservaciones</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Catálogo de actividades</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Revisa el mapa</a></li>
                 <li class="nav-item"><a href="index.php" class="nav-link"><img src="images/user.png"></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="parallax1" data-parallax="scroll" data-image-src="images/Cancun2.jpg">
  <div class="image-caption">
    <h1 style= "font-size: 60px; color: #ffffff; background-color: #000000;opacity: 0.7;">Festeja Cancún</h1>
  </div>
</div>
<body style="background-color: #dddddd;">
<br>
<br>
<div class="container-fluid padding">
  <div class="row text-center padding">
    <div class="col-12">
      <h2> ¡Reserva ahora!</h2>
      <hr>
    </div>
  </div>
</div>
<br>
<div class="container-fluid">
  <form class="" action="index.html" method="post">
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <div class="fondo_blanco text-center" style="margin-top: 45px;">
          <div class="Inside">
            <h2>Duración del viaje</h2>
            <label for="Salida">Salida:</label>
            <input type="date" id="Salida" name="trip-start" value="2019-09-30"min="2019-01-01" max="2030-12-31" onload="fecha_dia();">
            <label for="Regreso">Regreso:</label>
            <input type="date" id="Regreso" name="trip-start" value="2019-10-1"min="2019-01-01" max="2030-12-31" onload="fecha_dia();">
          </div>
          <br>
          <br>
          <div class="text-center">
            <h2>Información adicional</h2>
            <label for="Cantidad">¿Cuantas personas viajan?</label>
            <input type="text" name="Cantidad"><br>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <div class="text-center">
          <h2>Selecciona el hotel</h2>
          <div class="container-fluid padding">
            <div class="row text-center padding">
              <div class="col-sm-12 col-md-4">
                <input type="radio" name="Hotel_Paris" id="C1" /><label for="C1"><img class="Imagen_check" src="images/C1.jpg" /></label>
                <div class="image-caption_Cuadrados_mini">
                  <h1 style= "font-size: 25px; color: white;"><br>Great <br> Parnassus </h1>
                  <a class="btn btn_nuevo" href="http://www.greatparnassuscancun.com/" target="_blank"> Info </a>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <input type="radio" name="Hotel_Paris" id="C2" /><label for="C2"><img class="Imagen_check" src="images/C2.jpg" /></label>
                <div class="image-caption_Cuadrados_mini">
                  <h1 style= "font-size: 25px; color: white;"><br>Grand <br> Park</h1>
                  <a class="btn btn_nuevo" href="https://www.parkroyal.mx/es/grand-park-royal/cozumel" target="_blank"> Info </a>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <input type="radio" name="Hotel_Paris" id="C3" /><label for="C3"><img class="Imagen_check" src="images/C3.jpg" /></label>
                <div class="image-caption_Cuadrados_mini">
                  <h1 style= "font-size: 25px; color: white;"><br>Grand  <br> Esmeralda</h1>
                  <a class="btn btn_nuevo" href="https://www.bluebayresorts.com/en/hotels/mexico/riviera-maya/playa-del-carmen/bluebay-grand-esmeralda/" target="_blank"> Info </a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <a class="btn btn-info" href="viaje_listo.php"> RESERVA AHORA </a>
        </div>
      </div>
    </div>
  </form>
</div>

 <br>
 <br>
 <br>
 </body>
 <footer class="footer footer-2 bg-dark text-light p-3">
     <div class="container">
         <div class="row">
             <div class="col-12">
                 <address>Augusto Rodin 498, Insurgentes Mixcoac, 03920 Ciudad de México, CDMX</address>
             </div>
         </div>
     </div>
     <div class="container mt-1 border-top">
         <p class="text-center mt-4">©Primer-Parcial</p>
     </div>
 </footer>



</html>
