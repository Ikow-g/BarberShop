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
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
            <div class="container mt-3">
              <a class="navbar-brand" href="#">D'Barbershop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/contact">Contact</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/catalog">Catalogue</a>
                      </li>

                      @guest
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/login">Login</a>
                      </li>
                      @else
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="/login" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->fname }}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                    </li>
                    @endguest
                  </ul>
              </div>
            </div>
          </nav>
          <h1>{{ $title }}</h1>
    </section>

   @yield('content')

    <!-- Footer -->
    <section class="footer text-center">
        <div class="container">
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
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ac8d43ee9f.js" crossorigin="anonymous"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>
