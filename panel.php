<?php
error_reporting(0);
require "seguridad.php";
session_start();
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
<div class="panel_administrativo " >
<a href="salir.php"><img  class="logo_sesion" src="imagenes/usuario_salir.png" alt=""  ></a>
  <h1>PANEL ADMINISTRATIVO</h1>

  <div class="admin_usuarios" >
    <div class="usuarios_txt" >
      <h2>USUARIOS</h2>
     </div>

      <div class="tabla_bd" >
      
    <div>
   <table class="tamaño_tabla" >
   <tr>
      <th>Nombre </th>
      <th>Apellido</th>
      <th>Dirección</th>
      <th>Número teléfonico</th>
      <th>Correo eléctronico</th>
      <th>Contraseña</th>
      <th>Eliminar</th>
    </tr>
    
   
   <?php
   include "conexion.php";
   $todos= "SELECT * FROM usuarios";
   $resultado=mysqli_query($conectar,$todos);
   while ($row= mysqli_fetch_assoc($resultado)){
   ?>
   <tr>
      <td><?php echo $row["nombre"]; ?></td>
      <td><?php echo $row["apellido"]; ?></td>
      <td><?php echo $row["direccion"]; ?></td>
      <td><?php echo $row["numero"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["contrasena"]; ?></td>
      <td> <a  href="#" onClick="validar('eliminar.php?id=<?php echo $row ["id"];?>')"><img class="ico" src="imagenes/eliminar.png" alt=""></a></td>
    </tr>
   <br>
   <?
   $todos_usuarios="SELECT*FROM datos ORDER BY id DESC";
   $resultado=mysqli_query($conectar,$todos_usuarios);
   while($registro=mysqli_fetch_assoc($resultado)){
    ?>

   

    <?php
    }
    mysqli_free_result($resultado);
    ?>

    </table>
    </div>

    <script>
      function validar(url){
        var eliminar=confirm("Realmente desea eliminar el usuario");
        if (eliminar == true){
          window.location=url;

        }
      }
    </script>
      </div>




      </div>
    
      
  </div>



  <div class="admin_promociones" >
    <div class="promociones_txt" >
      <h2>Promociones</h2>
    </div>
  </div>



</div>
</body>
</html>