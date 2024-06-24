<?php
include ('header.php');
?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-lg-12">
            <h1 class="page-title-heading">Team</h1>
            <nav aria-label="breadcrumb">
              <ol class="custom-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active current" aria-current="page">Team</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <div class="site-section slider-team-wrap">
        <div class="container">

          <div class="slider-nav d-flex justify-content-end mb-3">
            <a href="#" class="js-prev js-custom-prev"><i class="bi bi-arrow-left-short"></i></a>
            <a href="#" class="js-next js-custom-next"><i class="bi bi-arrow-right-short"></i></a>
          </div>

          <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
            <script type="application/json" class="swiper-config">
              {
                "loop": true,
                "speed": 600,
                "autoplay": {
                  "delay": 5000
                },
                "slidesPerView": "1",
                "pagination": {
                  "el": ".swiper-pagination",
                  "type": "bullets",
                  "clickable": true
                },
                "navigation": {
                  "nextEl": ".js-custom-next",
                  "prevEl": ".js-custom-prev"
                },
                "breakpoints": {
                  "640": {
                    "slidesPerView": 2,
                    "spaceBetween": 30
                  },
                  "768": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                  },
                  "1200": {
                    "slidesPerView": 3,
                    "spaceBetween": 30
                  }
                }
              }
            </script>
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="team">
                  <div class="pic">
                    <img src="assets/img/team/team-1.jpg" alt="Image" class="img-fluid">
                  </div>
                  <h3 clas="">
                    <a href="#"><span class="">Jeremy</span> Walker</a>
                  </h3>
                  <span class="d-block position">CEO, Founder, Atty.</span>
                  <p>
                    Separated they live in. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.
                  </p>
                  <p class="mb-0">
                    <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team">
                  <div class="pic">
                    <img src="assets/img/team/team-2.jpg" alt="Image" class="img-fluid">
                  </div>
                  <h3 clas="">
                    <a href="#"><span class="">Lawson</span> Arnold</a>
                  </h3>
                  <span class="d-block position">CEO, Founder, Atty.</span>
                  <p>
                    Separated they live in. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.
                  </p>
                  <p class="mb-0">
                    <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team">
                  <div class="pic">
                    <img src="assets/img/team/team-3.jpg" alt="Image" class="img-fluid">
                  </div>
                  <h3 clas="">
                    <a href="#"><span class="">Patrik</span> White</a>
                  </h3>
                  <span class="d-block position">CEO, Founder, Atty.</span>
                  <p>
                    Separated they live in. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.
                  </p>
                  <p class="mb-0">
                    <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                  </p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="team">
                  <div class="pic">
                    <img src="assets/img/team/team-4.jpg" alt="Image" class="img-fluid">
                  </div>
                  <h3 clas="">
                    <a href="#"><span class="">Kathryn</span> Ryan</a>
                  </h3>
                  <span class="d-block position">CEO, Founder, Atty.</span>
                  <p>
                    Separated they live in. Separated they live in Bookmarksgrove
                    right at the coast of the Semantics, a large language ocean.
                  </p>
                  <p class="mb-0">
                    <a href="#" class="more dark">Learn More <span class="bi bi-arrow-right-short"></span></a>
                  </p>
                </div>
              </div>
              <!-- <div class="swiper-slide"></div> -->
            </div>
          </div>
        </div>
        <!-- /.container -->
      </div>
    </section><!-- /Team Section -->

  </main>

  <?php
  include('footer.php');
  ?>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>