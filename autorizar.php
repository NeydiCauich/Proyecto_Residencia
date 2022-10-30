<?php
require "conexion.php";

$user = $_POST['nombre'];
$pass = $_POST['contrasena'];


$verificar = "SELECT * FROM usuario WHERE nombre='$user' AND contrasena='$pass' ";

$res = mysqli_query($conectar, $verificar);

if (mysqli_num_rows($res) > 0 ) {

    session_start();
    $_SESSION['username'] = $user;
    $_SESSION["auntetificado"] = "SI";
    header("Location: index2.php");

}
 else{
    echo '
    <script>
      alert("Error de Acceso. Inténtelo de nuevo.");
      location.href="index.php?erroruser=SI";
    </script>
  
  ';
}

