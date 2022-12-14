<?php
  $title = "Office Relocation Services";
  $currentPage = "home";

 ?>
<!-- HEAD -->

<?php
  include("head.php");
 ?>


  <body>

      <!-- TOPBAR & NAVBAR-->

      <?php
        include("topbar.php");
        include("navbar.php");
       ?>

      <!-- HEADER -->
      <header id="main-header" class="pt-3 bg-primary">
        <div class="container"></div>
      </header>

      <!-- SHOWCASE CAROUSEL -->
      <section id="home-section">
        <div class="hse">
          <div class="carousel slide carousel-fade" id="myCarousel" data-ride="carousel">
            <ol class="carousel-indicators">
              <li
                class="active"
                data-target="#myCarousel"
                data-slide-to="0"
              ></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">

                <div class="carousel-item carousel-image-1 active" title="Office Relocation Services">
                  <div class="container">
                    <div class="carousel-caption text-right mb-5">
                      <h1 class="display-6">Business Relocations</h1>
                      <p class="d-none d-sm-block">
                        We provide business relocations with the assistance of our
                        well-equipped staff, for safe, effective and efficient removals every time.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item carousel-image-2" title="Office Relocation Services">
                  <div class="container">
                    <div class="carousel-caption mb-5">
                      <h1 class="display-6">Move Management</h1>
                      <p class="d-none d-sm-block">
                        Partner with a professional commercial mover and receive
                        streamlined services of the highest standards.
                      </p>
                      <a href="move-management.php" class="btn btn-primary">Find Out More</a>
                    </div>
                  </div>
                </div>
                <div class="carousel-item carousel-image-3" alt="carousel-pic" title="Office Relocation Services">
                  <div class="container">
                    <div class="carousel-caption text-left mb-5">
                      <h1 class="display-6">Recycle/Reuse</h1>
                      <p class="d-none d-sm-block">
                        We reduce our carbon footprint by repurposing and recycling
                        your unwanted office furniture.
                      </p>
                    </div>
                  </div>
                </div>

              <a
                href="#myCarousel"
                data-slide="prev"
                class="carousel-control-prev"
              >
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a
                href="#myCarousel"
                data-slide="next"
                class="carousel-control-next"
              >
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- WELCOME -->
      <section id="welcome-section">
        <div class="container">
          <div class="site-welcome py-3">
            <h2>Welcome to Office Relocation Services.</h2>
            <p class="info-text-font">
              At Office Relocation Services we know how important it is to keep your
              business productive. That is why we have developed an effective strategy including
              pre-planned schedules and a professional team to facilitate the move. Our relocation
              service hours are flexible, assisting businesses with weekend and after-hours removals.
            </p>
          </div>
        </div>
      </section>

      <!-- SEVICE CARDS -->
      <section id="service-list">
        <div class="container serv-list">
          <div class="row">
            <div class="col-md-4">
              <div id="card1" class="card text-center mb-2">
                <div class="card-header">
                  <i class="fas fa-desktop fa-4x"></i>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h4>IT Relocations</h4>
                    <p class="card-text info-text-font">
                      When you need your IT equipment moved, we create a specialized removal and IT
                      relocation plan to ensure every apparatus reaches its new destination in one piece.
                      Our expert IT services are fully customized to meet your needs.
                      <br>
                      <hr>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div id="card2" class="card text-center mb-2">
                <div class="card-header">
                  <i class="fas fa-screwdriver fa-4x"></i>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h4>Furniture Installation</h4>
                    <p class="card-text info-text-font">
                      Moving to a new office? Need professional furniture setup? We are the ones to call.
                      Our team has the knowledge and the tools to install your office furniture and prevent
                      professional downtime.
                      <br>
                      <br>
                      <hr>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <div id="card3" class="card text-center">
                <div class="card-header">
                  <i class="fas fa-people-carry fa-4x"></i>
                </div>
                <div class="card-body">
                  <div class="card-title">
                    <h4>Specialist Moves</h4>
                    <p class="card-text info-text-font">
                      We are your unique relocation specialists. We have the manpower,
                      equipment and the knowledge to help all businesses from science labs
                      to major furniture removals. We can do it all.
                      <br>
                      <br>
                      <hr>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- <div id="cat-1" >
      <object id="cat-2" data="https://www.paperturn-view.com/?pid=NTI52437&bgcolor=%23FFFFFF&     embed=script&shadow=1&flipSound=1&hardCover=" width="100%" height="100%">
        <embed  width="100%" height="100%">  Error: Embedded data could not be displayed.</object>
      </div>
      <script src="https://www.paperturn-view.com/script/embed?v=1"></script> -->


      <!-- TESTIMONIALS
      <section id="testimonials" class="p-4 bg-dark text-white">
      </section> -->

      <!-- CATALOGUE -->
      <section id="catalogue" class="p-4 text-white">
        <div class="container">
          <div class="" id="cat-head">
            <h3>Browse Our Catalogue...</h3>
          </div>
        </div>
        <div data-paperturn="embed-v1" style="width: 100%; max-width: 100%; height: 408px;">
          <iframe src="https://www.paperturn-view.com/?pid=Nzg78658&bgcolor=%239aa29a&embed=script&shadow=1&flipSound=&hardCover=" width="100%" height="100%" webkitallowfullscreen mozallowfullscreen allowfullscreen style="border: 10px; display: block; background-color: #fff"></iframe></div>
        <script src="https://www.paperturn-view.com/script/embed?v=1"></script>
      </section>






      <!-- ROTATING CARDS -->
      <section id="rotating-cards">
        <div class="container">
          <div class="row">
            <!-- CARD-1 -->
            <div class="col-lg-3 col-md-6">

              <header class="showcase-circle sc-1" title="Office Relocation Services">
                  <div class="container showcase-circle-inner">
                    <h1>Catalogue</h1>
                    <p>
                        We have a full catalogue available for all your office
                        furniture needs.
                        <br>
                        <br>
                      </p>
                      <a id="hover-btn" href="contact.php" class="btn btn-secondary"
                          >Find out more</a
                        ><br />
                  </div>
                </header>
            </div>

            <!-- CARD-2 -->
            <div class="col-lg-3 col-md-6">
            <header class="showcase-circle sc-2" title="Office Relocation Services">
                  <div class="container showcase-circle-inner ">
                    <h1>Clearance</h1>
                    <p>
                    We always look at the most sustainable way to resell, donate or recycle your furniture.
                        <br>
                        <br>
                      </p>
                      <a id="hover-btn" href="contact.php" class="btn btn-secondary"
                          >Find out more</a
                        ><br />
                  </div>
                </header>
            </div>

            <!-- CARD-3 -->
            <div class="col-lg-3 col-md-6">
              <header class="showcase-circle sc-3" title="Office Relocation Services">
                  <div class="container showcase-circle-inner ">
                    <h1>Internal Moves</h1>
                    <p>
                    Whether you're moving floors within your building or changing your team around internally.
                        <br>

                      </p>
                      <a id="hover-btn" href="contact.php" class="btn btn-secondary"
                          >Find out more</a
                        ><br />
                  </div>
                </header>
            </div>

            <!-- CARD-4 -->
            <div class="col-lg-3 col-md-6">
            <header class="showcase-circle sc-4" title="Office Relocation Services">
                  <div class="container showcase-circle-inner ">
                    <h1>Dilapidation</h1>
                    <p>
                    When you need to restore your previous office back to how it was when you moved in.
                        <br>

                      </p>
                      <a id="hover-btn" href="contact.php" class="btn btn-secondary"
                          >Find out more</a
                        ><br />
                  </div>
                </header>
            </div>
            <!-- Card End -->
          </div>
        </div>
      </section>

      <!-- WHY SECTION -->
      <section id="why-section" title="Office Relocation Services">
        <div class="why-image">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h4>Why choose us:</h4>
                <ul>
                  <li>We are an insightful, knowledgeable and experienced office removal service. </li>
                  <li>We create pre planned schedules fully tailored to suit your hours and removal dates. </li>
                  <li>
                    Our moving teams are highly trained and exceptional at what they do. From packaging to transport, we are the very best in commercial moving services.
                  </li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li>
                    Whether heavy items or specialized moves, we provide the most efficient and reliable office relocation.
                  </li>
                  <li>We ensure that every office move is thoroughly planned, helping to minimize company downtime. </li>
                  <li>We believe in professional sustainability through our reusing and recycling initiatives. </li>
                  <li>
                    Our company is a leading move management service for commercial practices and businesses.
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER & JAVASCRIPT AND JQUERY LINKS-->
        <?php
          include("footer.php");
          include("foot-script.php");
         ?>


    <!-- JAVASCRIPT -->
    <script>
      $('.carousel').carousel({
        interval: 5000,
        pause: 'hover'
      });

      $('.slider').slick({
        infinite: true,
        slideToShow: 1,
        slideToScroll: 1
      });
    </script>

  </body>
</html>
