<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    require_once __DIR__ . '/Views/Views.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/assets/css/app.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <script src="https://kit.fontawesome.com/aba09469eb.js" crossorigin="anonymous"></script>

    <?php if( !isset( $_GET['page'] ) ): ?>
        <title>Home - Tokio School</title>
        <?php else: ?>
            <title><?= $_GET['page'] ?> - Tokio School</title>
    <?php endif;?>

</head>
<body>
<?php
    if( !isset( $_GET['page'] ) ) {
        include_once './Views/Pages/home.php';
    } else {
        $pages = new Views($_GET['page']);
        include "./Views/Pages/".$pages->routes().".php";
    }
?>

<?php if( isset($_GET['page']) ):  ?>
  <?php if( $_GET['page'] != 'login' || $_GET['page'] != 'register' || $pages->routes() == '404'): ?>
    <footer id="footer" class="footer-container">
      <section class="footer-links">
        <article class="footer-menu">
          <a>Politica de Privacidad</a>
          <a>Aviso Legal</a>
          <a>Politica de Cookies</a>
        </article>
        <article class="footer-rrss">
          <a><i class="facebook fa-brands fa-facebook"></i></a>
          <a><i class="twitter fa-brands fa-twitter"></i></a>
          <a><i class="twitch fa-brands fa-twitch"></i></a>
        </article>
      </section>
      <section class="footer-copyright">
        <p> © Todos los derechos reservados a <a>www.example.es</a> </p>
      </section>
    </footer>
 <?php include_once './Views/Pages/Layouts/cookies.php';  ?>
  <?php endif;?>
  <?php else: ?>
    <footer id="footer" class="footer-container">
      <section class="footer-links">
        <article class="footer-menu">
          <a>Politica de Privacidad</a>
          <a>Aviso Legal</a>
          <a>Politica de Cookies</a>
        </article>
        <article class="footer-rrss">
          <a><i class="facebook fa-brands fa-facebook"></i></a>
          <a><i class="twitter fa-brands fa-twitter"></i></a>
          <a><i class="twitch fa-brands fa-twitch"></i></a>
        </article>
      </section>
      <section class="footer-copyright">
        <p> © Todos los derechos reservados a <a>www.example.es</a> </p>
      </section>
    </footer>
    <?php include_once './Views/Pages/Layouts/cookies.php';  ?>
<?php endif;?>

    
        <div class="loader">
            <p>Cargando</p>
        </div>

    <!-- Script -->
    <script defer type="text/javascript" src="./Public/assets/js/app.js?v="<?= time(); ?>></script>
    <script defer type="text/javascript" src="./Public/assets/js/slider.js"></script>
    <!-- End script -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {

      var calendarEl = document.getElementById('calendar');

      if( calendarEl ) {
        var calendar = new FullCalendar.Calendar(calendarEl,  {
            initialView: 'dayGridMonth',
            events: './Public/assets/json/class.json',
            locale: 'es'
        });
      calendar.render();
    }
    });
  </script> 

</body>
</html>