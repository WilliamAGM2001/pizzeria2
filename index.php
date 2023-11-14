<?php
error_reporting(0);
session_start();
if($_SESSION["autentificado"]=="SI")
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
  <link rel='stylesheet' type='text/css' media='screen' href='http://localhost/Proyecto_Final_pizzeria/estilo.css'></script>
</head>
<body>
 <div class="arriba" >
 <a href="index.php"><img  class="logo" src="imagenes/logo_sinfondo.png" alt=""  ></a>
  <div class="menu " >

<a href="#menu">Menú</a>
<a href="promociones.php">Promociones</a>
<a href="#contactanos">Contactanos</a>
<a href="#ubi">Ubicación</a>
  </div>
<div class="inicio_sesion" >
  <a href="iniciar_sesion.php"><img  class="logo_sesion" src="imagenes/usuario.png" alt=""  ></a>
   <br>
  <a href="iniciar_sesion.php">INICIAR SESIÓN</a>

</div>


 </div>

 <div class="slider" >
<img class="slider"  src="imagenes/slider-pizza.jpg" alt="">
 </div> <br>
 <div class="menu_pizzas ancho " >
 <a name="menu"></a>
<h1 class="titulo_menu">MENÚ</h1>
<img class="img_pizza" src="imagenes/pizza.svg" alt="">

<div menu_p >
  <img class="menu_p " src="imagenes/menu.png" alt="">
</div>
 </div>
<br><br><br><br><br><br><br>

<div class="contacta ancho" >
  <div class="contactanos" >
    <div class="encabezado1" >
    <a name="contactanos"></a>
    <h2>CONTÁCTANOS</h2>
    </div> <br><br>
    <div class="form_contacta" >
<form enctype="multipart/form-data"  action="">
  <input class="diseñoform" type="text" placeholder="Nombre:"  >
  <input class="diseñoform" id="num" type="text" placeholder="*Teléfono:">
  <input class="diseñoform" type="text" id="correo" placeholder="*Email:" >
   <textarea class="diseñoform" id="txtarea"  name="" id="" cols="30" rows="10" placeholder="*Comentarios:"></textarea> <br>
   <input class="btn_java" type="button" value="Enviar" onclick="valida_formulario()" >
</form>
    </div>
  </div>
  <div class="linea_divide" ></div>


  <div class="ubicacion" >
    <div class="encabezado2" >
    <a name="ubi"></a>

<h2>UBICACACIÓN</h2>
</div>
<div class="mapa" >
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7466.90309240825!2d-89.4666197558005!3d20.651200561352645!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc5cd715ec4889859!2sPANTHER%20PIZZA!5e0!3m2!1ses-419!2smx!4v1670519785708!5m2!1ses-419!2smx" width="450" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

  </div>


</div>


<?php
include "include_abajo.php"
?>


 


 <script>
  function valida_formulario() {
  if (document.getElementById("num").value.length == 0) {
    alert("Escribe tú número teléfonico")
    document.getElementById("num").focus()
    return 0;
  }
  if (document.getElementById("correo").value.length == 0) {
    alert("Escribe tu email")
    document.getElementById("correo").focus()
    return 0;
  }
  if (document.getElementById("txtarea").value.length == 0) {
    alert("Escribe tu comentarios")
    document.getElementById("txtarea").focus()
    return 0;
  }

  document.formulario.submit();
  
  }
  </script>
</body>
</html>