<?php
require_once __DIR__ . '/../bootstrap.php';
require_once __DIR__ . '/../src/Views/Views.php';
require_once __DIR__ . '/../src/Utils/titlePages.php';
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/aba09469eb.js" crossorigin="anonymous"></script>
    <?php if (!isset($_GET['page'])): ?>
        <title>Inicio - Oposiciones Online</title>
        <?php else: ?>
          <?php if (titlePages::getTitlePage($_GET['page']) == null): ?>
            <title>Oposiciones Online</title>
            <?php else: ?>
              <title><?=titlePages::getTitlePage($_GET['page'])?> - Oposiciones Online</title>
          <?php endif;?>
    <?php endif;?>
</head>
<body>
<?php
if (!isset($_GET['page'])) {
    include_once '../src/Views/Pages/home.php';
} else {
    $pages = new Views($_GET['page']);
    include "../src/Views/Pages/" . $pages->routes() . ".php";
}
?>
<?php if (isset($_GET['page'])): ?>
  <?php if ($_GET['page'] != 'login' || $_GET['page'] != 'register' || $pages->routes() == '404'): ?>
    <footer id="footer" class="footer-container">
      <section class="footer-links">
        <article class="footer-menu">
          <a href="http://localhost:9000/?page=privacidad">Politica de Privacidad</a>
          <a href="http://localhost:9000/?page=legal">Aviso Legal</a>
          <a href="http://localhost:9000/?page=cookies">Politica de Cookies</a>
        </article>
        <article class="footer-rrss">
          <a href="https://www.facebook.com/Albert.Dev00"><i class="facebook fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/"><i class="twitter fa-brands fa-twitter"></i></a>
          <a href="https://www.twitch.tv/manjondev"><i class="twitch fa-brands fa-twitch"></i></a>
        </article>
      </section>
      <section class="footer-copyright">
        <p> © Todos los derechos reservados a <a href="https://www.linkedin.com/in/albert-jurado-manjon-0878b2198/" target="_blank">Albert Manjon</a> </p>
      </section>
    </footer>
 <?php include_once '../src/Views/Pages/Layouts/cookies.php';?>
  <?php endif;?>
  <?php else: ?>
    <footer id="footer" class="footer-container">
      <section class="footer-links">
        <article class="footer-menu">
          <a href="http://localhost:9000/?page=privacidad">Politica de Privacidad</a>
          <a href="http://localhost:9000/?page=legal">Aviso Legal</a>
          <a href="http://localhost:9000/?page=cookies">Politica de Cookies</a>
        </article>
        <article class="footer-rrss">
        <a href="https://www.facebook.com/Albert.Dev00"><i class="facebook fa-brands fa-facebook"></i></a>
          <a href="https://twitter.com/"><i class="twitter fa-brands fa-twitter"></i></a>
          <a href="https://www.twitch.tv/manjondev"><i class="twitch fa-brands fa-twitch"></i></a>
        </article>
      </section>
      <section class="footer-copyright">
      <p> © Todos los derechos reservados a <a href="https://www.linkedin.com/in/albert-jurado-manjon-0878b2198/" target="_blank">Albert Manjon</a> </p>
      </section>
    </footer>
    <?php include_once '../src/Views/Pages/Layouts/cookies.php';?>
<?php endif;?>
        <div class="loader">
            <p>Cargando...</p>
        </div>
    <!-- Script -->
    <script defer type="text/javascript" src="./assets/js/app.js?v="<?=time();?>></script>
    <script defer type="text/javascript" src="./assets/js/slider.js"></script>
    <!-- End script -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      let calendarEl = document.getElementById('calendar');
      if( calendarEl ) {
        let calendar = new FullCalendar.Calendar(calendarEl,  {
            initialView: 'dayGridMonth',
            events: './assets/json/class.json',
            locale: 'es'
        });
      calendar.render();
    }
    });
  </script>
</body>
</html>