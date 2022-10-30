<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Talents Code</title>
  <link rel="stylesheet" href="estilos.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="jquery.tinycarousel.js"></script>
  <script src="wow.min.js"></script>
  <script src='https://kit.fontawesome.com/2ee0245f3d.js' crossorigin='anonymous'></script>
  <script src="responsiveslides.min.js"></script>

</head>
<body>
  <i class="ir_arriba fa-solid fa-circle-up"></i>
  <script>
    $(document).ready(function(){
      $('.ir_arriba').click(function(){
          $('body, html').animate({
              scrollTop: '0px'
          }, 1000);
      });
    });
  </script>
  <script>
    new WOW().init();
    </script>
  <script>
    $(function() {
      $(".rslides").responsiveSlides();
    });
  </script>
  <script>
    $(function () {
        $("#slider4").responsiveSlides({
            auto: false,
            pager: false,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
              $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
              $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>

<?php
include "nav.php";
 ?>
    <!--Sección del Slider-->
  
    <section class="slidefotos ">
      <div class="callbacks_container">
      <ul class="rslides" id="slider4">
        <li><img src="imagenes/slide1.jpg" alt=""></li>
        <li><img src="imagenes/slide2.jpg" alt=""></li>
        <li><img src="imagenes/slide3.jpg" alt=""></li>
        <li><img src="imagenes/slide4.jpg" alt=""></li>
        <li><img src="imagenes/slide5.jpg" alt=""></li>


      </ul>
    </div>
    <div class="infoslide">
      <p class="titulo1 animate__animated animate__backInDown ">Bienvenidos a <span>Talents code</span></p>
      <p class="animate__animated animate__backInLeft ">Creemos que cualquiera puede reclutar personal, pero no todos saben contratar talento </p>
      <div class="contenedorbotones animate__animated animate__backInRight ">
        <a href="#" class="btn_naranja">contáctanos</a>
        <a href="#" class="btn_play" id="Btn">
          <i class="fa-solid fa-circle-play"></i>
        </a>
      </div>
    </div>
  </section>
  <section id="modal" class="contenidomodal">
    
      
      
    <div class="estructuramodal">
      <div class="titulo">
      <i id="cerrarbtn"  class="rojo fa-solid fa-square-xmark "></i>
        <h2>Contac Us</h2>
       
      </div>
      <div class="info">
        <p>If you any questions concerting our services, pleasse fill out the contact form below</p>
        <br>
      </div>
      <div class="formulario ">
        <form action="enviar.php" method="post">
          <input type="text" placeholder="Name*" required>
          <input type="email" placeholder="E-mail*" required>
          <textarea name="" id="" placeholder="Message*" required></textarea>
          <div id="envio">
            <a href="#" class="btn_naranja">SUBMIT</a>
         
          </button>
        </div>
        </form>
      </div>
    </div>
  </div>
  </section>
<!-- funcion modal -->
  <script>
    var mostrarmodal = document.getElementById("modal") ;
    var cerrarmodal = document.getElementById("cerrarbtn");
    var btnejecutar = document.getElementById("Btn");
  

    btnejecutar.onclick = function(){
      mostrarmodal.style.display = "block";
    }

    cerrarmodal.onclick = function(){
      mostrarmodal.style.display = "none";
    }

    window.onclick = function (event) {
      if (event.target == mostrarmodal) {
        mostrarmodal.style.display = "none";
      }
    };

  </script>
  <br>
  <br>
  <br>
  <section class="cont_quienes">
    <div class=" cont_abajo ancho" >
    <div>
      <figure class="imagen">
        <img src="imagenes/about-us.png" alt="">
      </figure>
    </div>
    <div class="cont_somos">
      <h2>¿Quienes somos?</h2>
      <div class="linea">
      <hr class="circle1">
      <hr class="circle2">
      <hr class="circle3">
      <hr class="circle4">
    </div>
      <p>Nos consideramos especialistas en contratar las y los talentos que necesita tu empresa para crecer. Cada día buscamos ser parte de las empresas y tecnologías que nuestros clientes necesitan.</p>
    
      <div class="cont_circulos1">
        <div class="circulo">
          <i class="fa-solid fa-chart-line"></i>
        </div>
        <div class="texto">
        <h3>
          La mejor agencia exitosa con todos nuestros clientes satisfechos</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi vero officiis eveniet enim ea quod exercitationem hic recusandae ab corrupti!</p>
        </div>
      </div>
      <div class="cont_circulos1">
        <div class="circulo">
          <i class="fa-solid fa-user-tag"></i>
        </div>
        
        <div class="texto">
          <h3>La seguridad y mejor para la entrega de personal para empresas</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eligendi vero officiis eveniet enim ea quod exercitationem hic recusandae ab corrupti!</p>
        </div>
      </div>
    </div>
  </div>
  </section>
  <section class="cont_services">
    <h2>Nuestros servicios</h2>
    <div class="linea2">
      <hr class="circle1">
      <hr class="circle2">
      <hr class="circle3">
      <hr class="circle4">
    </div>
    <div class="cont_servicios ancho">
    <article class="servicios">
      <div class="cuadrado">
        <i class="fa-solid fa-hand-holding-hand"></i>
      </div>
<h3>Servicios de contratación</h3>
<p>Tenemos diferentes servicios hechos a tu medida para contratar al talento que necesitas.</p>
<div class="abajo">
  <i class="fa-solid fa-arrow-right-long"></i>
  <h3>Ver más</h3>
</div>
    </article>
    <article class="servicios">
      <div class="cuadrado">
        <i class="fa-solid fa-file-circle-question"></i>
      </div>
<h3>Servicios en gestión y estrategias en nómina</h3>
<p>Te ayudamos a tener un departamento de Recursos Humanos digitalizado o una empresa bien medida, siempre transparente y productiva.​</p>
<div class="abajo">
  <i class="fa-solid fa-arrow-right-long"></i>
  <h3>Ver más</h3>
</div>
    </article>
    <article class="servicios">
      <div class="cuadrado">
        <i class="fa-solid fa-newspaper"></i>
      </div>
<h3>Servicios en consultoria de talento</h3>
<p>Sabemos que en cualquier empresa los talentos pueden no durar para siempre, es importante que al concluir una colaboración, esta acabe en buenos términos.</p>
<div class="abajo">
  <i class="fa-solid fa-arrow-right-long"></i>
  <h3>Ver más</h3>
</div>
    </article>
    <article class="servicios">
      <div class="cuadrado">
        <i class="fa-solid fa-pager"></i>
      </div>
<h3>Plataforma de talentos</h3>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, corrupti illo quae commodi ad fuga consequatur at id. Quas, eum!</p>
<div class="abajo">
  <i class="fa-solid fa-arrow-right-long"></i>
  <h3>Ver más</h3>
</div>
    </article>
  </div>
  </section>




  <section class="cont_procesos">
  <br>

    <h2>Proceso</h2>
    <h3>Nuestro proceso de trabajo</h3>
    <div class="linea2">
      <hr class="circle1">
      <hr class="circle2">
      <hr class="circle3">
      <hr class="circle4">
    </div>
    <div class="cont_trabajo ancho">
      <article class="cont_pasos">
        <div class="cont_arriba">
        <div class="cont_circulo">
          <i class="fa-solid fa-file-circle-exclamation"></i>
        </div>
        <div class="cont_circulo2">
         <h2>01</h2>
        </div>
      </div>
        <h3>Seleccione un problema</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugit rerum tempora eius suscipit dolorem deserunt corporis laborum repudiandae nemo.</p>
      </article>

    <article class="cont_pasos">
      <div class="cont_arriba">
      <div class="cont_circulo">
        <i class="fa-solid fa-paste"></i>
      </div>
      <div class="cont_circulo2">
       <h2>02</h2>
      </div>
    </div>
      <h3>Recolectar datos</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugit rerum tempora eius suscipit dolorem deserunt corporis laborum repudiandae nemo.</p>
    </article>

     <article class="cont_pasos">
      <div class="cont_arriba">
      <div class="cont_circulo">
        <i class="fa-solid fa-print"></i>
      </div>
      <div class="cont_circulo2">
       <h2>03</h2>
      </div>
    </div>
      <h3>Procesar datos</h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint fugit rerum tempora eius suscipit dolorem deserunt corporis laborum repudiandae nemo.</p>
    </article>
  </div>
  </section>
  <br>
  <br>

  
  <section class=" parallaxs">
    <div class="filtro"></div>
    <h3>Creemos que cualquiera puede reclutar personal, pero no todos saben contratar talento</h3>
      <a href="#" class="btn_naranja">contáctanos</a>
  </section>
  <br>
  <script>
    $(document).ready(function () {
        $("#slider1").tinycarousel();
    });
  </script>
  <section id="slider1" class=" fondo ancho">
     
    <div class="informacion">
      <h2>Casos de éxito</h2>
      <p class="h3">Comentarios de nuestros clientes</p>
      <p> La opinión de los clientes es importante aquí te presentamos algunas opiniones que ellos destacan de Talents Code.</p>
  <div class="flechas">
    <a class="buttons prev" href="#">
      <i class="fa-solid fa-arrow-left"></i>
    </a>
    <a class="buttons next" href="#">
      <i class="fa-solid fa-arrow-right-long"></i>
    </a>
  </div>
  </div>
  </div>
  
  <div class="viewport">
    <div class="overview">
  
      <article class="cards">
        <div class="estrellas">
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
        <i class="fa-solid fa-star"></i>
      </div>
    
        <h3>Excelente servicio</h3>
        <p>Talents Code fue un gran herramienta para ayudarnos a encontrar nuestro excelente desarrollador Back End en Portèlo. La atención y el seguimiento fue maravilloso y en tiempo acordado. Estoy muy contenta de haber elegido a Talents Code para reclutar y seleccionar a nuestro desarrollador
        </p>
    
        <div>
          <div class="circulo3">
        <img src="imagenes/foto1.jpg" alt=""/>
        <div>
        <h3>Valeria Filizola
        </h3>
        <h4>Gerente de atención al cliente en Portèlo
        </h4>
      </div>
      </div>
      </div>
  
    </article>
  
    <article class="cards">
      <div class="estrellas">
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
    </div>
  
      <h3>Muy buen servicio</h3>
      <p>La experiencia de trabajar con Talents Code ha sido muy buena. Me dejaron una muy buena primera impresión al hacerme preguntas interesantes sobre las vacantes que teníamos, preguntas que hacer entender que saben sobre su trabajo y de lo que hacen.
        Me gusta que es un equipo estructurado y con mucho seguimiento, muy importante para un buen servicio.
        .</p>
  
      <div>
        <div class="circulo3">
          <img src="imagenes/foto5.png" alt=""/>
      <div>
      <h3>Ramón Franco
      </h3>
      <h4>Director Comercial en Plog
      </h4>
    </div>
    </div>
    </div>
  
  </article>
  
  <article class="cards">
    <div class="estrellas">
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
  </div>
  
    <h3>Buen servicio servicio</h3>
    <p>Agradezco mucho al equipo de Talents Code su profesionalismo para encontrar y seleccionar a los mejores talentos para mi empresa, su acompañamiento en todo momento dan la confianza de estar eligiendo al mejor talento para la empresa, Gracias Talents Code
    </p>
  
    <div>
      <div class="circulo3">
    <img src="imagenes/foto2.jpg" alt=""/>
    <div>
    <h3>Rodrigo Reyes
</h3>
    <h4>Director General y fundador en Bazar de Canteras
    </h4>
  </div>
  </div>
  </div>
  
  </article>
  <article class="cards">
    <div class="estrellas">
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
    <i class="fa-solid fa-star"></i>
  </div>
  
    <h3>Excelente servicio</h3>
    <p>Talents Code es una empresa altamente profesional y enfocada en resultados en la búsqueda correcta. Filtran muy bien y se enfocan correctamente en las necesidades digitales de hoy en día; validando los skills que están perfectamente alineados a las necesidades del puesto.
    </p>
  
    <div>
      <div class="circulo3">
    <img src="imagenes/foto4.jpg" alt=""/>
    <div>
    <h3>Cristobal Acevedo Contreras
    </h3>
    <h4>Director de Marketing Digital en Mantra
    </h4>
  </div>
  </div>
  </div>
  
  </article>

    </div>
  </section>
  <br>
 <?php
include "footer.php";
 ?>



</body>
</html>
