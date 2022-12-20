<?php 
  session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/fontawesome-free-5.15.3-web/css/all.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style-catalog.css">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/ac8d43ee9f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8d774616-db7c-4e02-96cc-529007c6d5bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body>
    <section class="sub-header">
      <nav>
        <a href="/" class="tulisan">D'Barbershop</a>
        <div class="nav-links" id="navLinks">
          <i class="fas fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/catalog">Catalogue</a></li>
            
            @guest
              <li><a href='/login'>Login</a></li>
            @else
              <li class="nav-item dropdown">
                <a class="nav-links dropdown-toggle" href="/" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ Auth::user()->fname }}
                </a>
                <ul class="dropdown-menu" id="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/logout">Logout</a></li>
                </ul>
              </li>
            @endguest

            {{-- if (isset($_SESSION["useruid"])) {
              echo "<li><a href='includes/logout.inc.php'>LOG OUT</a></li>";
            }
            else {
              echo "<li><a href='/login'>Login</a></li>";
            } --}}
          </ul>
        </div>
        <i class="fas fa-bars" onclick="showMenu()"></i>
      </nav>
      <h1>{{ $title }}</h1>
        @guest
        @else
          <p>Hello there, {{ Auth::user()->fname }}</p>
        @endguest
            {{-- if (isset($_SESSION["useruid"])) {
              echo "<p> Hello there, " . $_SESSION["useruid"] . "</p>";
            } --}}
    </section>

   @yield('content')

    <!-- Footer -->
    <section class="footer">
        <h4>About Us</h4>
        <p>
          Malang, East Java 65153
        </p>
        <div class="icons">
          <i class="fab fa-facebook"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-twitter"></i>
        </div>
        <p>Copyright ©2022 - D'Barbershop. All Rights Reserved.</p>
      </section>

    <!-- Java Script for Toggle Menu -->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }
      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>
    <script src="https://kit.fontawesome.com/ac8d43ee9f.js" crossorigin="anonymous"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
