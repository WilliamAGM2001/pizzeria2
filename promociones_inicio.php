<?php
error_reporting(0);
require "seguridad.php";
session_start();
$usuario= $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='estilo.css'>
  <script src='main.js'></script>
</head>
<body>
<div class="arriba" >
<a href="principal_usuarios.php"><img  class="logo" src="imagenes/logo_sinfondo.png" alt=""  ></a>
  <div class="menu " >

<a href="#menu2">Menú</a>
<a href="">Promociones</a>
<a href="#contactanos2">Contactanos</a>
<a href="#ubi2">Ubicación</a>
  </div>
  <div class="inicio_sesion" >
  <a href="salir.php"><img  class="logo_sesion" src="imagenes/usuario_salir.png" alt=""  ></a>
   <br>
   <h5 class="usuario_es" > <?php echo $usuario; ?> </h5>
   </div>
</div>
</div>
<div  class="promociones_m " >
  <div class="promo_txt" >
  <h2>PROMOCIONES</h2>
  </div>
  <div class="video" >
  <iframe “&autoplay=1” width="560" height="315" src="https://www.youtube.com/embed/jEz5ns4HMy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="gato" >
      <h2>Sí, pero y las verdaderas promociones?</h2>
      <img class="meme" src="imagenes/memegato.jpeg" alt="">

    </div>
    <?php
    include "include_abajo.php";
    ?>
</div>
</body>
</html>