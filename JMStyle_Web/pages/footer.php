<?php

echo "
<footer id="footer' class='letrafooter'>
<div class='container'>
  <div class='row'>
    <div class='col-md-4 divBor' style='padding-top: 3rem;'>
      <nav class='nav flex-column'>
        <a href='../index.php'>Inicio</a>
        <a href='productos.php'>Productos</a>
        <a href='contactanos.php'>Contáctanos</a>
        <a href='acerca.html'>Acerca de</a>
      </nav>
    </div>
    <!-- enlaces Redes sociales -->
    <div class='col-md-4 divBor text-center' style='padding-top: 5rem;'>
      <img class='aligncenter' id='tamIcon' src='src/img/iconos/fb.png' alt=''>
      <img class='aligncenter' id='tamIcon' src='src/img/iconos/insta.png' alt=''>
      <img class='aligncenter' id='tamIcon' src='src/img/iconos/twitter.png' alt=''>
    </div>

    <div class='col-md-4 ' style='padding-top: 1rem;'>
      <div>
        <a>Ubicacion:</a>
      </div>
      <div id='map-container-google-1' class='z-depth-1-half map-container text-center'
        style='height: 250px; padding-top: 1rem;'>
        <iframe
          src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30888.152059915345!2d-87.85350337591268!3d14.597992777798071!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6595a3b6d8afe3%3A0x3dab665e36cbd548!2sSiguatepeque%2C%20Honduras!5e0!3m2!1ses!2sus!4v1625805419572!5m2!1ses!2sus'
          width='300' height='200' style='border:0;' allowfullscreen='' loading='lazy'></iframe>
      </div>
    </div>
  </div>
</div>

<div style='width: 100%; text-align: center; padding-top: 20px;'>
  <a> ®Derechos Reservados - 2021, JMStyle</a>
</div>
</footer>

<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'
    integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'>
  </script>

";

?>