<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D'Barbershop</title>
    <link rel="stylesheet" href="/assets/css/style.css" />
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
    <!-- <link rel="stylesheet" href="fontawesome-free-5.15.3-web/css/all.css" /> -->
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/ac8d43ee9f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8d774616-db7c-4e02-96cc-529007c6d5bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body>
    <section class="header">
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
              <a class="nav-links dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
      <div class="text-box">
        <h1>Get a Good Cut.</h1>
        <p>Because hair is the crown of every person.</p>
        @guest
        @else
          <p>Hello there, {{ Auth::user()->fname }}</p>
        @endguest
        
            {{-- if (isset($_SESSION["useruid"])) {
              echo "<p> Hello there, " . $_SESSION["useruid"] . "</p>";
            } --}}
            
        <a href="/visit" class="hero-btn">Visit Us To Know More</a>
      </div>
    </section>

 

    <!-- Popular Package  -->
    <section class="package">
      <div class="row">
        <div class="package-col">
          <i class="fa fa-location-arrow fa-4x text-teal"></i>
          <h3>Choose Package</h3>
          <p>
            Anda bisa memilih beberapa paket yang ditawarkan untuk menikmati
            layanan potongan rambut di D'Barbershop.
          </p>
        </div>
        <div class="package-col">
          <i class="fa fa-building fa-4x text-teal"></i>
          <h3>Book Online</h3>
          <p>
            Di D'Barbershop anda bisa melakukan booking online secara praktis dan mudah.
          </p>
        </div>
        <div class="package-col">
          <i class="fa fa-bell fa-4x text-teal"></i>
          <h3>Good Service</h3>
          <p>
            D'Barbershop menyediakan pelayanan semaksimal mungkin agar pelanggan dapat merasakan pengalaman yang tidak akan terlupakan.
          </p>
        </div>
      </div>
    </section>

    <!-- Popular Places -->
    <section class="places">
      <h1>Our Facilities</h1>
      <p>
        D'Barbershop memiliki beragam faisilitas yang ditawarkan seperti potongan rambut yang berkualitas, layanan yang baik, dan produk yang lengkap.
      </p>

      <div class="row">
        <div class="places-col">
          <img src="/assets/images/facilities1.jpeg" />
          <div class="layer">
            <h3>GOOD HAIRCUT</h3>
          </div>
        </div>
        <div class="places-col">
          <img src="/assets/images/facilities3.jpeg" />
          <div class="layer">
            <h3>FACILITIES</h3>
          </div>
        </div>
        <div class="places-col">
          <img src="/assets/images/facilities2.jpeg" />
          <div class="layer">
            <h3>PRODUCTS</h3>
          </div>
        </div>
      </div>
    </section>

    <!-- Facilities -->

    <section class="facilities">
      <h1>Our Products</h1>
      <p>
     Beberapa produk dengan kualitas yang bagus kami tawarkan untuk kebutuhan rambut anda.
      </p>
      <div class="row">
        <div class="facilities-col">
          <img src="/assets/images/product1.jpeg" />
          <h3>Powder</h3>
          {{-- <p>Nikmatilah pemandangan yang indah dari Kaki Gunung Arjuna.</p> --}}
        </div>
        <div class="facilities-col">
          <img src="/assets/images/product2.jpeg" />
          <h3>Wax</h3>
          {{-- <p>Pemandangan daun teh hijau yang sangat menyejukkan.</p> --}}
        </div>
        <div class="facilities-col">
          <img src="/assets/images/product3.jpeg" />
          <h3>Serum</h3>
          {{-- <p>Lihatlah langsung proses pembuatan teh.</p> --}}
        </div>
      </div>
    </section>

        <!-- Team -->

        <section class="team">
          <h1>Our Teams</h1>
          <p>
         Sambutlah team dari D'Barbershop yang memungkin website ini terbuat.
          </p>
          <div class="row">
            <div class="team-col">
              <img src="assets/images/team1.jpeg" />
              <h3>Ramadhani Al Amin</h3>
              <p>2440103911</p>
              <p style="font-style: italic">UI/UX Designer</p>
            </div>
            <div class="team-col">
              <img src="assets/images/team2.jpeg" />
              <h3>Muhammad Rizal Sakti</h3>
              <p>2440099946</p>
              <p style="font-style: italic">Full Stack</p>
            </div>
            <div class="team-col">
              <img src="assets/images/team3.jpeg" />
              <h3>Gede Dyava Savitra</h3>
              <p>2440100683</p>
              <p style="font-style: italic">Full Stack</p>
            </div>
            <div class="team-col">
              <img src="assets/images/team4.jpeg" />
              <h3>Mahatmaditya Favian RS</h3>
              <p>2440103546</p>
              <p style="font-style: italic">Front-End</p>
            </div>
            <div class="team-col">
              <img src="assets/images/team5.jpeg" />
              <h3>Bachatsa Taqqiya</h3>
              <p>2440071733</p>
              <p style="font-style: italic">UI/UX Designer</p>
            </div>
          </div>
        </section>

    <!-- Testimonial -->
    <section class="testimonials">
      <h1>What Our Visitors Says</h1>
      <p>Beberapa testimoni dari mereka</p>

      <div class="row">
        <div class="testimonials-col">
          <img src="assets/images/user1.jpg" />
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              placeat fuga officia eum. Perferendis impedit dolorem tempore,
              aperiam dicta unde maiores nostrum sequi! Id, fuga neque quos quas
              facere blanditiis!
            </p>
            <h3>Benedicta Michel</h3>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
        <div class="testimonials-col">
          <img src="assets/images/user2.jpg" alt="">
          <div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
              placeat fuga officia eum. Perferendis impedit dolorem tempore,
              aperiam dicta unde maiores nostrum sequi! Id, fuga neque quos quas
              facere blanditiis!
            </p>
            <h3>Gorge Washington</h3>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- Call To Action -->
    <section class="cta">
      <h1>Book Now</h1>
      <a href="/contact" class="hero-btn">CONTACT US</a>
    </section>

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
