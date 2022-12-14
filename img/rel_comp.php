<?php
  $title = "IT";
  $currentPage = "rel-IT";
  $form_page = "IT Relocations";

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
                 <h1 class="display-4">IT Relocations</h1>
                 <p class="lead">
                   We provide highly specialized IT relocation services for the
                   management and the transport of all computer hardware and
                   operational systems.
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
                 IT Relocations
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
               <h3 class="sec-head">IT RELOCATIONS</h3>
               <p class="info-text-font">
                 Office Relocation Services is fully equipped to handle electronic
                 apparatus for transport. Our expert team of movers use the correct
                 packaging and handling of all mechanics and adopts secure measures
                 to ensure items reach its target destinations with efficiency and
                 effectiveness.
               </p>
               <h3 class="sec-head">IT Disconnect/Reconnect Service</h3>
               <p class="info-text-font">
                 Disconnecting and reconnecting your valuable electronics is a huge
                 task. If you need professional IT relocation services for your
                 company???s upcoming move, Office Relocation Services IT
                 disconnect-reconnect team are here to help. We will meet with your
                 move team and IT department to identify which electronic items
                 need to be relocated and develop a clear plan with a detailed
                 timeframe for moving all your equipment. Once move day arrives,
                 Office Relocation Services IT team will work closely with your IT
                 department to enable all computers to be disconnected and secured
                 for transport.

               </p>
               <h3 class="sec-head">Professional Trolleys for Computer Equipment </h3>
               <p class="info-text-font">
                 We use computer trolleys to load and move your systems for transport
                 onto our vehicles. Specific packaging is used in the form of covers
                 so that screens and keyboards are safe and secure for the journey
                 ahead. Our expert movers know how to plan and organize equipment on
                 the truck to avoid shifting and to avoid breakage.
               </p>
               <h3 class="sec-head">Professional Crates for IT Relocation </h3>
               <p class="info-text-font">
                 Purpose built computer crates are used to house PC units and monitors
                 during transit. We maintain our professional standards and transport
                 solutions to ensure every item is managed and delivered to its next
                 destination intact. Each crate is carefully labelled for efficient
                 unpacking and placement of equipment.
               </p>
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
