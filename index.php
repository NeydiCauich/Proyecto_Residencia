<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.png">
<link rel="stylesheet" href="estilos2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <script src='https://kit.fontawesome.com/2ee0245f3d.js' crossorigin='anonymous'></script>
    <title>Iniciar Sesión</title>
</head>
<body>
<section  class="fondo">
    <div class="ancho cont"> 
        <div class="formulario">
        <h2>Iniciar Sesión</h2>
              
        <form action="autorizar.php" method="POST" class="form">
            <?php
            $erroruser = isset($_GET["erroruser"]);
            if ($erroruser == "SI") {
                echo '<h4 class="alerta">Datos Incorrectos</h4></font><br>';
            }
           ?>

            <input class="entrada"  name="nombre" type="text"  placeholder="Usuario" required>
            <input class="entrada"  name="contrasena" type="password" placeholder="Contraseña">
            <button type="submit" class="btn_send"> Iniciar Sesión</button>
        </form>
          
     <a class="txt_azul" href="registrar.php">Registrate</a>
           
        </div>

      
</section>



</body>
</html>