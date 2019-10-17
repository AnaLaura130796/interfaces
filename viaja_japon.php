<!DOCTYPE html>
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

<div class="parallax1" data-parallax="scroll" data-image-src="images/Tokyo.jpg">
  <div class="image-caption">
    <h1 style= "font-size: 60px; color:#ffffff; background-color: #000000; opacity: 0.7;">Explora Tokyo</h1>
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
        <div class="fondo_blanco text-center">
          <div class="Inside" style="margin-top: 45px;">
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
                <input type="radio" name="Hotel_Paris" id="T1" /><label for="T1"><img class="Imagen_check" src="images/Park.JPG" style="opacity: 0.3;" /></label>
                <div class="image-caption_Cuadrados_mini">
                  <h1 style= "font-size: 25px; color: #000000;"><br>Park <br>Hotel</h1>
                  <a class="btn btn_nuevo" href="https://parkhoteltokyo.com/" target="_blank"> Info </a>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <input type="radio" name="Hotel_Paris" id="T2" /><label for="T2"><img class="Imagen_check" src="images/Tornamons.jpeg" style="opacity: 0.3;" /></label>
                <div class="image-caption_Cuadrados_mini">
                  <h1 style= "font-size: 25px; color: #000000;"><br>Tornamon<br>Hills</h1>
                  <a class="btn btn_nuevo" href="https://toranomonhills.com/en/" target="_blank"> Info </a>
                </div>
              </div>
              <div class="col-sm-12 col-md-4">
                <input type="radio" name="Hotel_Paris" id="T3" /><label for="T3"><img class="Imagen_check" src="images/Capitol.jpg" style="opacity: 0.3;" /></label>
                <div class="image-caption_Cuadrados_mini">
                  <h1 style= "font-size: 25px; color: #00000; "><br>Capitol<br> Tokyu</h1>
                  <a class="btn btn_nuevo" href="https://www.tokyuhotelsjapan.com/global/capitol-h/" target="_blank"> Info </a>
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
