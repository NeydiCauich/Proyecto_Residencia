<?php
require "conexion.php";
 
//creamos variables en donde se guaradaran
// los valores enviados por POST
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $empresa = $_POST['empresa'];
  $puesto = $_POST['puesto'];
  $correo = $_POST['correo'];
  $telefono = $_POST['telefono'];


  echo $nombre;
 

  $insertar = "INSERT INTO contacto (nombre,apellido, empresa, puesto ,correo, telefono) VALUES ('$nombre','$apellido','$empresa','$puesto','$correo','$telefono')";
   
$query = mysqli_query($conectar, $insertar);

if($query){
    echo '
      <script>
        alert("se guardó con ÉXITO");
        location.href="index.html";
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