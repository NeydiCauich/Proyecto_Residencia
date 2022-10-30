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
    <title>Registrar</title>
</head>
<body>
<section  class="fondo">
    <div class="ancho cont"> 
        <div class="formulario">
        <h2>Registrese</h2>
              
        <form action="enviar.php" method="POST" class="form">
            <input class="entrada"  name="nombre" type="text"  placeholder="Usuario" required>
            <input class="entrada"  name="contrasena" type="password" placeholder="Contraseña">
            <input class="entrada"  name="fecha" type="date"  placeholder="fecha de nacimeinto" required>
            <input class="entrada"  name="correo" type="email" placeholder="Correo">
            <input class="entrada"  name="telefono" type="phone" placeholder="Número de telefono">
            <button type="submit" class="btn_send">Registrarse</button>
        </form>
          
     <a class="txt_azul" href="index.php">Si ya tienes cuenta inicia sesión</a>
           
        </div>

   
    </div>
</section>


    
</body>