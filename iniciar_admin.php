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


<div class="login " >
  <img class="home_pizza" src="imageneS/administrador.png" alt="">
<h2>INICIAR</h2>

<form action="autentificar_admin.php" method="post">
<?php
    $errorusuario=isset($_GET["error usuario"]);
    if($errorusuario=="SI"){
      echo '<h3>Datos incorrectos</h3>';
    }
    ?>
  <input class="form_inicio" type="text" placeholder="Correo eléctronico" name="usuari" > <br>
  <input class="form_inicio" type="password" placeholder="Contraseña" name="access" > <br>
  <input class="btn_iniciar" type="submit" value="INICIAR SESIÓN"> <br>

</form>

</div>
<br><br><br><br><br>