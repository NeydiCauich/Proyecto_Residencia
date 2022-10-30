<?php
require "conexion.php";
 
//creamos variables en donde se guaradaran
// los valores enviados por POST
  $nombre = $_POST['nombre'];
  $contrasena = $_POST['contrasena'];
  $fecha = $_POST['fecha'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];


  $insertar = "INSERT INTO usuario (nombre,contrasena, fecha, correo, telefono) VALUES ('$nombre','$contrasena','$fecha','$correo','$telefono')";
   
$query = mysqli_query($conectar, $insertar);

if($query){
    echo '
      <script>
        alert("se guardó con ÉXITO");
        location.href="index.php";
      </script>
    ';
    exit;
  }
  else{
    echo '
      <script>
        alert("Hubo un problema al guardar. Inténtelo de nuevo.");
        location.href="registrar.php";
      </script>
    
    ';
  }

?>