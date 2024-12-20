<?php

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portal Académico UTS</title>

    <link rel="icon" href="assets/icon-uts.ico" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=SUSE:wght@100..800&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/index.css" />
    <link rel="stylesheet" href="css/transversal.css" />
  </head>
  <body>
    <header>
      <img class="header-image" src="assets/Logo-UTS-1.png" alt="" />
      <nav>
        <ul class="list-menu">
          <li><a href="index.html">Inicio</a></li>
          <li><a href="pages/noticias.html">Noticias</a></li>
          <li><a href="pages/admisiones.html">Admisiones</a></li>
          <li id="loginLink"><a href="pages/login.php">Login</a></li>
          <li><button class="logoutButton" id="logoutButton" style="display: none;">Cerrar Sesión</button></li>
        </ul>
      </nav>
    </header>
    <div class="content">
      <h2 class="title-content">Portal Academico</h2>
      <div class="container-pages">
        <a class="container-page" href="pages/oferta-academica.html">
          <img src="assets/oferta-academica.png" alt="" />
          <h2>Oferta Academica</h2>
        </a>
        <a class="container-page" href="pages/noticias.html">
          <img src="assets/noticias.webp" alt="" />
          <h2>Noticias</h2>
        </a>
        <a class="container-page" href="pages/register.php">
          <img src="assets/registro.png" alt="" />
          <h2>Registro</h2>
        </a>
        <a class="container-page" href="pages/quienes-somos.html">
          <img src="assets/quienes-somos.webp" alt="" />
          <h2>Quienes Somos</h2>
        </a>
        <a class="container-page" href="pages/admisiones.html">
          <img src="assets/admisiones.png" alt="" />
          <h2>Admisiones</h2>
        </a>
      </div>

      <h2 class="title-content">Plataformas y Ayudas</h2>
      <div class="container-pages">
        <a
          class="container-page"
          href="https://atena.uts.edu.co/login/index.php"
          target="_blank"
        >
          <img src="assets/atena.png" alt="" />
          <h2>ATENA</h2>
        </a>
        <a
          class="container-page"
          href="https://estudiante.uts.edu.co/uts/hermesoft/vortal/iniciarSesion.jsp"
          target="_blank"
        >
          <img src="assets/academusoft.png" alt="" />
          <h2>ACADEMUSOFT</h2>
        </a>
        <a
          class="container-page"
          href="https://gdeco.uts.edu.co/cupones/"
          target="_blank"
        >
          <img src="assets/liquidacion.webp" alt="" />
          <h2>IMPRIMIR LIQUIDACION</h2>
        </a>
      </div>
    </div>
    <div class="footer">
      <h3>2024 UTS. Todos los derechos reservados.</h3>
      <p>Realizado por:</p>
      <ul>
        <li>Camilo Andres Perez Quintanilla</li>
        <li>Jeison Enrique Lopez Vargas</li>
        <li>Joseph Alejandro Diaz Forero</li>
      </ul>
    </div>
    <!-- <script src="js/index.js"></script> -->
  </body>
</html>