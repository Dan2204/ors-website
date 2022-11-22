<?php
  $title = "Warehouse";
  $currentPage = "rel-warehouse";
  $form_page = "Warehouse Relocations";

  include("rel-form-php.php");

  // HEAD SECTION
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

       <!-- ABOUT HEAD -->
       <section id="about-head">
         <div class="showcase-inner py-5 text-white">
           <div class="container">
             <div class="row text-center">
               <div class="col-md-12">
                 <h1 class="display-4">Warehouse Relocations</h1>
                 <p class="lead">

                 </p>
               </div>
             </div>
           </div>
         </div>
       </section>

       <!-- Breadcrumb -->
       <section id="bc" class="mt-3">
         <div class="container">
           <nav>
             <ol class="breadcrumb">
               <li class="breadcrumb-item">
                 <a href="index.php"><i class="fas fa-home pr-1"></i> Home</a>
               </li>
               <li id="li-style" class="breadcrumb-item active">
                 Services
               </li>
               <li id="li-style" class="breadcrumb-item active">
                 Warehouse Relocations
               </li>
             </ol>
           </nav>
         </div>
       </section>

       <!-- MAIN CONTENT -->
       <section id="services-main-content">
         <div class="container my-4">
           <div class="row" id="warehouse-pics">
             <div class="col-md-8" id="info-text-content">
               <h2 class="sec-head">WAREHOUSE RELOCATIONS</h2>

               <p class="info-text-font">
                 Office Relocation Services are specialist movers for warehouse
                 relocations, providing expert technicians, machinery and equipment
                 to transfer your stock while ensuring its condition is maintained
                 and accounted for during transit.
               </p>
               <p class="info-text-font">
                 We plan every detail of the relocation process by labelling in
                 sequence allowing for seamless unpacking before items are placed
                 to their respective shelves/areas as per the floor plan.
               </p>
               <p class="info-text-font">
                 Our expert movers will we go the extra mile to provide our customers
                 with the most valuable and impressive moving solutions in the industry.
                 We take pride in being organized and efficient across the board.
               </p>
               <br>
               <br>
               <img src="img/warehouse.jpg" alt="ORS - Not Found"
                id="wh-pic-top" class="img-fluid" />
              </div>
              <div class="col-md-4 d-none d-md-block">
                <?php
                  include("rel_form.php");
                 ?>
              </div>
             </div>
           </div>
       </section>

 <!-- FOOTER & JAVASCRIPT AND JQUERY LINKS-->
   <?php
     include("footer.php");
     include("foot-script.php");
     include("rel-form-js.php");
    ?>

    <!-- JAVASCRIPT -->
    <script></script>

  </body>
</html>
