<?php
  $title = "Crates | Business Relocation | Business Moves | Office Removals";
  $currentPage = "crates";

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
                 <h1 class="display-4">Crate Hire</h1>
                 <p class="lead">
                   Office Relocation Services has you covered if you are planning on moving office and looking for the best packing solutions.
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
                 Crate Hire
               </li>
             </ol>
           </nav>
         </div>
       </section>

       <!-- MAIN CONTENT -->
       <section id="services-main-content">
         <div class="container my-4">
           <div class="row">
             <div class="col-md-2" id="crate-hire-info">
               <h2>CRATE HIRE</h2>
               <!--<h5 class="info-text-font mt-3">
                 <a href="why-crates.html" class="sec-head">WHY CRATES?</a>
               </h5>-->
             </div>

             <div class="col-md-10">
               <div class="container moving-boxes">
                 <h2 class="sec-head">
                   Packing Solutions
                 </h2>
                 <p class="info-text-font">
                   We understand the importance of keeping your valuables safe and therefore use high quality equipment that meets industry standards, providing a variety of packaging options to meet your specific needs since no move is the same.
                 </p>
                 <p class="info-text-font">
                   ORS cares about our environment and ensures that the products we use are sustainable and reusable thus reducing waste at an affordable cost to the client.
                 </p>

                 <h1 class="sec-head mt-4">
                   Crate Hire vs Boxes
                 </h1>
                 <h2 class="sec-head">
                   Moving Crates
                 </h2>
                 <br>
                 <p class="info-text-font sec-head">
                   Our crates are made from heavy-duty commercial plastic proving the following advantages:
                 </p>
                 <ul type="circle" class="info-text-font">
                   <li>
                     Durability; longer life span
                   </li>
                   <br />
                   <li>
                     Protection from; weather, pests and dust proof.
                   </li>
                   <br />
                   <li>
                     Environmentally friendly; re-usable, sustainable
                   </li>
                 </ul>
                 <br>

                 <p class="info-text-font sec-head pp">Stackable:</p>
                 <p class="info-text-font">
                    Relocating means that space often becomes an issue, but our crates allow you to stack four boxes at any one time, which means more space for packing.
                 </p>
                 <p class="info-text-font sec-head pp">Handling: </p>
                 <p class="info-text-font">
                    Crates require minimal lifting unlike cardboard boxes, so that multiple crates can be moved with ease.
                 </p>
                 <p class="info-text-font sec-head pp">Accessibility:</p>
                 <p class="info-text-font">
                    Our crates are fitted with lids that can be accessed at your convenience, without the need to seal and reseal, proving you with flexibility while also saving you time.
                 </p>
                 <br>
                 <hr>
                 <br>
                 <h3 class="sec-head">
                   How it works...
                 </h3>

                 <ul type="square" class="info-text-font">
                   <br>
                   <li>
                     <span class="sec-head">Call us</span> - For a free quote and to discuss your requirements
                   </li>
                   <br>
                   <br>
                   <li>
                     <span class="sec-head">Deliver</span> - We deliver at a pre-arranged date and time for your convenience
                   </li>
                   <br>
                   <br>
                   <li>
                     <span class="sec-head">Use</span> - We will send you 'how to pack' tips, Labels and security seals provided if required
                   </li>
                   <br>
                   <br>
                   <li>
                     <span class="sec-head">Collect</span> - Collection arranged at a pre-arranged date and time for your convenience
                   </li>
                   <br>
                   <br>


               </div>
               <div class="card card-body py-5">
                 <div class="row">
                   <div class="col">
                     <img
                      id="crate-img-style"
                      src="img/GreenCratePlain.jpg"
                      alt="Office Relocation Services"
                      class="img-fluid"
                     />
                   </div>
                 </div>
               </div>
               <br>
               <p class="info-text-font">
                 <h1 class="text-center">Call us now on <span class="sec-head">02080 374554</span></h1>
               </p>
             </div>
           </div>
         </div>
       </section>

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
