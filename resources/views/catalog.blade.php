@extends('layouts.header')

@section('content')
<section id="portfolio" class="portfolio">
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Powder</li>
            <li data-filter=".filter-card">Wax</li>
            <li data-filter=".filter-serum">Serum</li>
            <!-- <li data-filter=".filter-web">Alat</li> -->
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/images/product1.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Powder</h4>
              <div class="portfolio-links">
                <a href="assets/images/product1.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-cookies.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/images/product2.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Powder</h4>
              <div class="portfolio-links">
                <a href="assets/images/product2.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-cookies.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/ph air.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pengukur PH Air</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ph air.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> 
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-serum">
          <div class="portfolio-wrap">
            <img src="assets/images/product3.jpeg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Powder</h4>
              <div class="portfolio-links">
                <a href="assets/images/product3.jpeg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-cookies.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/bolu_gulung.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Roll Cake</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/bolu_gulung.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-bolu.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/susu.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Fresh Milk</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/susu.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-susu.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/alat.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>3 in 1 Shovel</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/alat.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                 <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> 
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/pie_buah.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Fruit Pie</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/pie_buah.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-pie.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/coffee.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bottle Coffee</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/coffee.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-coffee.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/juice.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Bottle Juice</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/juice.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-juice.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/thai.png" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Thai / Milk Tea</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/thai.png" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a>
                <a href="portfolio-thai.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/portfolio/ph tanah.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Pengukur PH Tanah</h4>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/ph tanah.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" ><i class="bx bx-plus"></i></a> -->
                <!-- <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a> -->
              <!-- </div>
            </div>
          </div>
        </div> -->

      </div>

    </div>
  </section>
@endsection