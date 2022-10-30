<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.png" />
    <link rel="stylesheet" href="contactanos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/2ee0245f3d.js"
      crossorigin="anonymous"
    ></script>
    <title>Contacto</title>
  </head>
  <body>
  <?php
include "nav.php";
 ?>
  
  <section class="contenedor_contact">


<div id="formulario_Uno">
  <br>
    <div class="formulario_Ayuda">
       
            <h2>CONTÁCTANOS</h2>
           
             
           
      <br>
            <form action="enviar2.php" method="POST" class="ancho">

                <input class="entrada"  name="nombre" type="text"  placeholder="Name*" required>
                <input class="entrada"  name="email" type="email" id="email"
                 placeholder="Email*" required>
                 <input class="entrada"  name="celular" type="phone" id="phone"
                 placeholder="Phone*" required>
                <textarea  class="entrada" name="comentarios" id="" placeholder="Message" cols="30" rows="10" required></textarea>
                
        <div class="botones">
            <button type="submit" class="btn_send" id="btn_rojo"> Enviar mensaje</button>
  
          </div>
              </form>


  
        
</div>

</div>


<div id="fondo">    
</div>     
</section>
  </body>
</html>
