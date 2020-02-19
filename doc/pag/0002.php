<!DOCTYPE HTML>
<!--
  Editorial by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <?php include '../componente/head.html'?>
  <style type="text/css">
    ul ul{
      margin-left: 25px;
    }
  </style>
  <body class="is-preload">
    <!-- Wrapper -->
    <div id="wrapper">
      <!-- Main -->
      <div id="main">
        <div class="inner">
          <!-- Header -->
          <?php include '../componente/cabecera.html'?>
          <!-- Content -->
          <section>
            <header class="main">
              <h1>
                Elementos
              </h1>
            </header>
          </section>
          <div class="row mb-5 pb-5">
            <div class="col-12">
              <p>
                A partir de PHP 5, PHP incluye un modelo de objetos completo. Algunas de sus características son: visibilidad, clases y métodos abstractos y finales, métodos mágicos adicionales, interfaces, clonación y determinación de tipos.
                <br/>
                <br/>
                PHP trata los objetos de la misma manera que las referencias o manejadores, lo que significa que cada variable contiene una referencia a un objeto en lugar de una copia de todo el objeto. Véanse los Objetos y referencias
              </p>
            </div>
            <div class="col-12 p-5 w3-light-grey mt-5">
              <h5>
                Visibilidad
              </h5>
              <p>
                La visibilidad de una propiedad, un método o (a partir de PHP 7.1.0) una constante se puede definir anteponiendo a su declaración una de las palabras reservadas public, protected o private. A los miembros de clase declarados como 'public' se puede acceder desde donde sea; a los miembros declarados como 'protected', solo desde la misma clase o mediante clases heredadas. A los miembros declarados como 'private' únicamente se puede acceder desde la clase que los definió.
              </p>
              <p style="text-align: right;">
                <a href="https://www.php.net/manual/es/language.oop5.visibility.php" target="_blank">
                  Visibilidad php
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Sidebar -->
      <?php include '../componente/menu.html'?>
    </div>
    <!-- Scripts -->
    <?php include '../componente/script.html'?>
  </body>
</html>
