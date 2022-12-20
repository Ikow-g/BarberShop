<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>index</title>
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
    <link rel="stylesheet" href="/assets/css/font-awesome.css">
    <script src="https://kit.fontawesome.com/ac8d43ee9f.js" crossorigin="anonymous"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="8d774616-db7c-4e02-96cc-529007c6d5bb";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
  </head>
  <body>

    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong">
            <div class="container mt-3">
              <a class="navbar-brand" href="#">D'Barbershop</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
               
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="/">Home</a>
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
      <div class="text-box text-center">
        <div class="position-absolute top-50 start-50 translate-middle">
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
      </div>
    </section>

    <section class="package text-center pt-5">
       <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-building fa-4x text-teal text-center"></i>
                        <h3>Choose Package</h3>
                        <p>
                          Anda bisa memilih beberapa paket yang ditawarkan untuk menikmati
                          layanan potongan rambut di D'Barbershop.
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-building fa-4x text-teal text-center"></i>
                        <h3>Book Online</h3>
                        <p>
                          Di D'Barbershop anda bisa melakukan booking online secara praktis dan mudah.
                        </p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <i class="fa fa-bell fa-4x text-teal text-center"></i>
                      <h3>Good Service</h3>
                      <p>
                        D'Barbershop menyediakan pelayanan semaksimal mungkin agar pelanggan dapat merasakan pengalaman yang tidak akan terlupakan.
                      </p>
                    </div>
                  </div>
              </div>
          </div>
       </div>
    </section>
    
    <section class="facilities mt-5 text-center">
        <div class="container">
            <h1>Our Facilities</h1>
            <p>
              D'Barbershop memiliki beragam faisilitas yang ditawarkan seperti potongan rambut yang berkualitas, layanan yang baik, dan produk yang lengkap.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-300 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="/assets/images/facilities1.jpeg" />
                            <div class="layer">
                                <h3>GOOD HAIRCUT</h3>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-300 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="/assets/images/facilities3.jpeg" />
                            <div class="layer">
                                <h3>GOOD HAIRCUT</h3>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-300 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="/assets/images/facilities2.jpeg" />
                            <div class="layer">
                                <h3>GOOD HAIRCUT</h3>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
           </div>
        </div>
    </section>

    <section class="product text-center mt-5">
        <div class="container">
            <h1>Our Products</h1>
            <p>
           Beberapa produk dengan kualitas yang bagus kami tawarkan untuk kebutuhan rambut anda.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="/assets/images/product1.jpeg" />
                            <h3>Powder</h3>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-100 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="/assets/images/product2.jpeg" />
                            <h3>Wax</h3>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-100 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="/assets/images/product3.jpeg" />
                            <h3>Serum</h3>
                        </div>
                      </div>
                  </div>
              </div>
           </div>
        </div>
    </section>

    <section class="team text-center mt-5">
        <div class="container">
            <h1>Our Teams</h1>
            <p>
            Sambutlah team dari D'Barbershop yang memungkin website ini terbuat.
            </p>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="assets/images/team1.jpeg" class="mx-auto d-block" />
                            <h3>Ramadhani Al Amin</h3>
                            <p>2440103911</p>
                            <p style="font-style: italic">UI/UX Designer</p>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-100 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="assets/images/team2.jpeg" class="mx-auto d-block" />
                            <h3>Muhammad Rizal Sakti</h3>
                            <p>2440099946</p>
                            <p style="font-style: italic">Full Stack</p>
                        </div>
                      </div>
                </div>
                <div class="col">
                    <div class="card h-100 border border-0">
                        <div class="card-body text-center facilities-body">
                            <img src="assets/images/team3.jpeg" class="mx-auto d-block" />
                            <h3>Gede Dyava Savitra</h3>
                            <p>2440100683</p>
                            <p style="font-style: italic">Full Stack</p>
                        </div>
                      </div>
                </div>
           </div>
           <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col">
                <div class="card h-100 border border-0">
                    <div class="card-body text-center facilities-body">
                        <img src="assets/images/team4.jpeg" class="mx-auto d-block"/>
                        <h3>Mahatmaditya Favian</h3>
                        <p>2440103546</p>
                        <p style="font-style: italic">Front-End</p>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card h-100 border border-0">
                    <div class="card-body text-center facilities-body">
                        <img src="assets/images/team5.jpeg" class="mx-auto d-block"/>
                        <h3>Bachatsa Taqqiya</h3>
                        <p>2440071733</p>
                        <p style="font-style: italic">UI/UX Designer</p>
                    </div>
                  </div>
              </div>
            </div>
           </div>
        </div>
    </section>

    <section class="testimoni text-center mt-5">
        <div class="container">
            <h1>What Our Visitors Says</h1>
            <p>Beberapa testimoni dari mereka</p>
                <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
                    <div class="col-lg-6">
                        <div class="card mb-3 h-50 border border-0">
                            <div class="card-body text-center">
                                <img src="assets/images/user1.jpg" class="mx-auto d-block"/>
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
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-3 h-50 border border-0" >
                            <div class="card-body">
                                <img src="assets/images/user2.jpg" class="mx-auto d-block" />
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta">
        <h1>Book Now</h1>
        <a href="/contact" class="hero-btn">CONTACT US</a>
    </section>

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