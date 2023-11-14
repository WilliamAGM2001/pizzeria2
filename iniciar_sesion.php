<?php
error_reporting(0);
session_start();
if($_SESSION["autentificado"] == "SI")
{
  header("location:principal_usuarios.php");
  exit();
}
?>
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
  <img class="home_pizza" src="imagenes/inicio_sesion.png" alt="">
<h2>BIENVENIDOS</h2>

<form action="autentificar.php" method="post">
<?php
    $errorusuario=isset($_GET["error usuario"]);
    if($errorusuario=="SI"){
      echo '<h3>Datos incorrectos</h3>';
    }
    ?>
  <input class="form_inicio" type="text" placeholder="Correo eléctronico" name="email" > <br>
  <input class="form_inicio" type="password" placeholder="Contraseña" name="contrasena" > <br>
  <input class="btn_iniciar" type="submit" value="INICIAR SESIÓN"> <br>

  <p>No tienes una cuenta? <a class="r" href="registro.php">registrate</a></p>

</form>

</div>
<br><br><br><br><br>
<?php
include "include_abajo.php"
?>

</body>
</html>