<?php
  $title = "Library";
  $currentPage = "rel-lib";
  $form_page = "Library Relocations";

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
                 <h1 class="display-4">Library Relocations</h1>
                 <p class="lead">
                   We Keep Your Valuables Secure During a Commercial Move
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
                 Library Relocations
               </li>
             </ol>
           </nav>
         </div>
       </section>

       <!-- MAIN CONTENT -->
       <section id="services-main-content">
         <div class="container mt-4">
           <div class="row">
             <div class="col-md-8" id="info-text-content">
               <h3 class="sec-head">LIBRARY RELOCATIONS</h3>
               <p class="info-text-font">
                 Library relocation is not a small feat and requires careful attention
                  to detail as well as the correct use of packaging and storage solutions.</p>

                 <p class="info-text-font">We are equipped with a dedicated team who
                   are able to provide the finest attention to detail without compromising
                   the condition of books, shelves and relevant store features. Office
                   Relocation Services will go the extra mile to provide our clients the
                   specialized removals they need for successful results whether you are
                   undergoing renovation or moving to a new premises.</p>

                 <p class="info-text-font">As experts in Library moves, we have a
                   professional team of movers who are not only mindful of every item
                   they manage but will always determine the best options to keep your
                   goods secure and organized until it reaches its next destination.</p>

                 <p class="info-text-font">It is essential for library relocations to
                   be managed by a professional commercial moving business due to its
                   intricate nature. We move anything from classic books with vintage
                   detail to office equipment in the library while exercising the utmost
                   respect in the removal, packaging and the placement of your valuables.</p>

                 <p class="info-text-font">We are unique in that each part of the process
                   is carefully managed because we are able to provide dedicated library
                   carts and technicians to avoid damage or deterioration to books and
                   furniture. </p>

                 <p class="sec-head info-text-font"> <strong>Our library relocation services include: </strong></p>

               </p>
               <ul type="square" class="info-text-font">
                 <li>Cataloging</li>
                 <li>Sequential packing and unpacking</li>
                 <li>Dismantling/installing of library racking and shelving</li>
                 <li>Crate hire for books and equipment</li>
                 <li>
                   Storage; Short and long-term storage solutions to fit your
                   library project
                 </li>
               </ul>

               <p class="sec-head info-text-font"> <strong>To ensure your move
                 goes to plan, our library consultants work very closely with:</strong></p>

               <ul type="square"  class="info-text-font">
                 <li>Librarians</li>
                 <li>Curators</li>
                 <li>Designers</li>
                 <li>Project Managers</li>
               </ul>

               <h3 class="sec-head">Sequential packaging for the successful transfer of books and goods</h3>
               <p class="info-text-font">
                 We assist in the dismantling of library furniture such as shelving
                  and complete units making it easier and safer to transport. Our
                  professional staff has the technical knowledge and tools to reassemble
                  furniture upon its arrival at the next destination. </p>

               <p class="info-text-font">
                 ORS offer temporary and long-term storage facilities for library
                 relocations depending on your needs. The success of such moves is
                 dependent on careful planning, strategy and attention to detail. </p>

               <h3 class="sec-head">Professional Pre-Planning for Your Successful
                 Library Relocation </h3>
               <p class="info-text-font">
                 Our dedicated moves manager will consult with the library management
                 to coordinate the commercial move. We ensure that areas of the library
                 are carefully categorised and that each part of the move is conducted
                 in stages. We adopt a collaborative approach ensuring that we remain
                 up to date and aware of your plans and requirements for the goods to
                 be packaged and transported.</p>

               <!--<p class="info-text-font">
                 We are flexible, patient and ultimately we are the very best professionals who can facilitate a secure, efficient and organized library relocation service. </p> -->
                 <br>
             </div>


             <div class="col-md-4 d-none d-md-block">
               <?php
                 include("rel_form.php");
                ?>
             </div>
           </div>
         </div>
       </section>

       <!-- <div id="temp-fill"></div> -->

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
