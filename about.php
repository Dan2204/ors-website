<?php
  $title = "About";
  $currentPage = "about";

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

       <!-- ABOUT HEAD -->
       <section id="about-head">
         <div class="showcase-inner py-5 text-white">
           <div class="container">
             <div class="row text-center">
               <div class="col-md-12">
                 <h1 class="display-4">About Office Relocation Services</h1>
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
                 About
               </li>
             </ol>
           </nav>
         </div>
       </section>

       <!-- INFO SECTION -->
       <section id="info-section">
         <div class="container pt-3">
           <div class="row">
             <div class="" id="info-left">
               <h1 class="display-5 sec-head">About us</h1>
               <p class="info-text-font lead pr-2">
                 Office Relocation Services recognise that moving your business to a new office can be a stressful period. This is why we have a dedicated team of experts that is able to provide you with professional advice on how we can tailor our services to your specific needs.
               </p>

               <p class="info-text-font mt-4">
                 Working with the best suppliers and contractors, our aim is to provide a service that takes care of the whole process, whether it’s the sourcing of furniture to moving your business to your new premises.
               </p>

               <p class="info-text-font mt-4">
                 Our expert movers have many years of experience in all aspects of moving businesses including installation, planning, project management, IT relocation and dilapidation.
               </p>

               <p class="info-text-font mt-4">
                 ORS’s values are based on honesty and integrity and we therefore provide complete transparency in the work we undertake for you.
               </p>
               <br>
               <p class="info-text-font sec-head" style="font-size: 1.2rem;">
                 For office removal and moving services you can trust, contact us today. We will provide the best professional solutions in office moves, relocation, storage and management requirements.
               </p>

             </div>

             <img src="img/office-busy.jpg" alt="ORS Img" id="about-pic" class="img-fluid my-5" />
             <!--<div class="col-md-4" id="info-right">-->

             </div>
           </div>
         </div>
       </section>

       <!-- MORE TEAM INFO
       <section id="more-team-info">
         <div class="container mt-5">
           <h1 class="pt-5">More information and pics of team here....</h1>
         </div>
       </section> -->

       <!-- <div id="temp-fill"></div> -->

       <!-- FOOTER & JAVASCRIPT AND JQUERY LINKS-->
         <?php
           include("footer.php");
           include("foot-script.php");
          ?>


    <!-- JAVASCRIPT -->
    <script></script>
  </body>
</html>
