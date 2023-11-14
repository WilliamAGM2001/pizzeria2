<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='http://localhost/Proyecto_Final_pizzeria/estilo.css'>
  <script src='main.js'></script>
</head>
<body>
<?php
include "include_registro.php";
?>
<div class="login" >
  <img class="home_pizza" src="imagenes/pizza-linea-concepto-comercio-electronico-pedir-comida-sitio-web-linea-servicio-entrega-pizza-comida-rapida-linea_589019-158.png" alt="">
  <h2>REGISTRATE</h2>
  <form action="guardar.php " method="post">
<input class="name-ape" type="text" placeholder="Nombre" name="nombre" >
<input class="name-ape" type="text" placeholder="Apellido" name="apellido" > <br>
<input class="form_registro" type="text" placeholder="Dirección" name="direccion" > <br>
<input class="form_registro" type="tel" placeholder="Número de teléfono" name="numero" > <br>
<input class="form_registro" type="text" placeholder="Correo eléctronico" name="email" > <br>
<input class="form_registro" type="password" placeholder="Contraseña" name="contrasena" > <br>

<input class="btn_registro" type="submit" value="REGISTRARME">

  </form>
  <p class="terminos" > Al oprimir "REGISTRARME" aceptas los Términos y condiciones y el Aviso de privacidad.</p>
</div>
<br><br><br><br><br>
<?php
include "include_abajo.php"
?>
</body>
</html>