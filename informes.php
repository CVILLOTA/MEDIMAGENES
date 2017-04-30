<?php
  $titlePage = "Informes";
  $textPage = "<ul class='flow-text'>
                <li>•	<a href='pdf/informeGestion.pdf' target='_blank'>Informe de Gestión</a> </li>
                <li>•	<a href='pdf/notaFinancieros.pdf' target='_blank'>Nota a los estados Financieros</a></li>
                <li>•	<a href='pdf/financieros2016.pdf' target='_blank'>Estados Financieros año 2016</a> </li>
              </ul>";
  $imageParallax="ecografia3d.jpeg";
  $imagePage = "carousel7.jpg";
  include("componentes/header.php");
  include("componentes/nav.php");
  include("componentes/title-page.php");
  include 'componentes/parallax-page.php';
  include 'componentes/container-service.php';
  include("componentes/footer.php");
?>
