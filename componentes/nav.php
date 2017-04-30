<!-- Inicio del menú -->
<nav>
  <div class="nav-wrapper white ">
    <a href="#!" class="brand-logo"><img class="logo-medimagenes" src="img/logo.png" alt=""></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse indigo-text"><i class="medium material-icons">menu</i></a>
    <!-- Menú horizontal -->
    <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo $ruta; ?>">Inicio</a></li>
      <li><a href="#">Nosotros</a>
        <ul>
          <li><a href="<?php echo $ruta; ?>mision.php">Mision</a></li>
          <li><a href="<?php echo $ruta; ?>vision.php">Visión</a></li>
          <li><a href="<?php echo $ruta; ?>principios.php">Principios y Valores</a></li>
          <li><a href="<?php echo $ruta; ?>objetivos.php">Objetivos</a></li>
        </ul>
      </li>
      <li><a href="#">Servicios</a>
        <ul>
          <li><a href="<?php echo $ruta; ?>mamografia.php">Mamografia</a></li>
          <li><a href="<?php echo $ruta; ?>ecografia.php">Ecografía</a></li>
          <li><a href="<?php echo $ruta; ?>radiografia.php">Radiografía</a></li>
        </ul>
      </li>
      <li><a href="#">Informacion General</a>
        <ul>
          <li><a href="<?php echo $ruta; ?>documentacion.php">Documentación</a></li>
        </ul>
      </li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
    <!-- Fin del menú horizontal -->

    <!-- Inicio del menú Responsive -->
    <div class="nav-responsive">
      <ul class="side-nav " id="mobile-demo">
        <li><a href="<?php echo $ruta; ?>">Inicio</a></li>
        <li><a href="#">Nosotros</a>
          <ul>
            <li><a href="<?php echo $ruta; ?>mision.php">Mision</a></li>
            <li><a href="<?php echo $ruta; ?>vision.php">Visión</a></li>
            <li><a href="<?php echo $ruta; ?>principios.php">Principios y Valores</a></li>
            <li><a href="<?php echo $ruta; ?>objetivos.php">Objetivos</a></li>
          </ul>
        </li>
        <li><a href="#">Servicios</a>
          <ul>
            <li><a href="<?php echo $ruta; ?>mamografia.php">Mamografia</a></li>
            <li><a href="<?php echo $ruta; ?>radiografia.php">Radiografía</a></li>
          </ul>
        </li>
        <li><a href="#">Informacion General</a>

        </li>
        <li><a href="#contacto" onclick="Materialize.fadeInImage('#image-test')">Contacto</a></li>
      </ul>
    </div>
    <!-- Fin del menú responsive -->

  </div>
</nav>
<!-- Fin del menú -->
