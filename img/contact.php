<?php

  $error = "";

  if ($_POST) {

    if (!$_POST["comp_name"]){
      $error .= "The company name is required.<br>";
    }
    if (!$_POST["address"]){
      $error .= "The Address is required.<br>";
    }
    if (!$_POST["name"]){
      $error .= "A contact name is required.<br>";
    }
    if (!$_POST["phone"]){
      $error .= "A phone number is required.<br>";
    }
    if (!$_POST["email"]){
      $error .= "PHP> An email address is required.<br>";
    }
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
      $error .= $_POST['email'] ." is not a valid email address.<br>";
    }

    if ($error != ""){
      $error = '<div class="alert alert-danger" role="alert"><p>Errors</p>' . $error . '</div>';
    } else {

      $emailTo = "enquiries@officerelocationservices.co.uk";
      // $emailTo = "dan.lucas2204@sky.com";

      $subject = "Website Enquiry (Contacts)";

      $content = "Company Name: " . $_POST['comp_name'] . "\n" . "Number of Staff: ". $_POST['staff']
      . "\n" . "Move date: " . $_POST['date'] . "\n" . "Address : " . $_POST['address'] . "\n" . "Contact Name: " . $_POST['name']
      . "\n" . "Tel: " . $_POST['phone'] . "\n" . "Mobile: " . $_POST['mobile'] . "\n" . "Email: " . $_POST['email']
      . "\n" . "Message: " . $_POST['message'];

      // $headers = "From: " . $_POST['email'];
      $headers = "From: website@officerelocationservices.co.uk";

      if (mail($emailTo, $subject, $content, $headers)){

        $error = '<div class="alert alert-success" role="alert"><p>Form sent, We will be in touch ASAP</p>' . $error . '</div>';

      }else{
        $error = '<div class="alert alert-success" role="alert"><p>Unsuccessfull, please try again later.</p>' . $error . '</div>';
      }

    }
  }

 ?>

 <?php
   $title = "Contact";
   $currentPage = "contact";

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
                <h1 class="display-4">Contact Us</h1>
                <p class="lead">
                  Complete the form or give us a call
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
                Contact
              </li>
            </ol>
          </nav>
        </div>
      </section>

      <section class="contact-content">
        <div class="container">
          <div class="row">
            <div class="col-md-8 col-sm-12">
              <div class="contact">
                <div id="quote-form" class="container">
                  <h5 id="form-title" class="text-center mb-4">Please complete the form.</h5>
                  <div id="error"><? echo $error; ?></div>
                  <form id="contact" class="contact-form" method="post">

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-briefcase"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          id="comp_name"
                          name="comp_name"
                          class="form-control"
                          placeholder="Company Name *"
                          required
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-users"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          id="staff"
                          name="staff"
                          class="form-control"
                          placeholder="Number of staff"
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="far fa-calendar-alt"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          id="date"
                          name="date"
                          class="form-control"
                          placeholder="Expected move date"
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-map-pin"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          id="address"
                          name="address"
                          class="form-control"
                          placeholder="Address *"
                          required
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-user"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          id="name"
                          name="name"
                          class="form-control"
                          placeholder="Contact Name *"
                          required
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-phone"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          id="phone"
                          name="phone"
                          placeholder="Contact Number *"
                          required
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-mobile-alt"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          id="mobile"
                          name="mobile"
                          class="form-control"
                          placeholder="Mobile"
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-envelope"></i
                          ></span>
                        </div>
                        <input
                          type="text"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Email *"
                          required
                        />
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text"
                            ><i class="fas fa-pencil-alt"></i
                          ></span>
                        </div>
                        <textarea
                          class="form-control"
                          id="message"
                          name="message"
                          placeholder="Message"
                        ></textarea>
                      </div>
                    </div>

                    <p class="text-muted">* required fields</p>
                    <div class="submit-btn">
                      <button class="btn btn-block" id="submit" type="submit">Submit</button>
                    </div>

                    <br>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-12">
              <p class="info-text-font">
                <br>
                <br>
                <h1 class="text-center">Call us now on: <br><span class="sec-head mt-3">02080 374554</span></h1>
                <br>
                <br>
                <h1 class="text-center">email us: <br><span class="sec-head ml-30px;" id="email-contact">enquiries@officerelocationservices.co.uk</span></h1>
                <br>
                <h1 id="joinus-style">Join Us: <br></h1>
                <br>
                <ul id="contact-media">
                  <li><a class="sec-head" href="https://www.facebook.com/
                  OfficeReloServices/">
                    <i class="fab fa-facebook mr-2"></i> Facebook
                  </a></li>
                  <br>
                  <li><a class="sec-head" href="https://www.instagram.com/officerelocationservices/?hl=en">
                    <i class="fab fa-instagram mr-2"></i> Instagram
                  </a></li>
                  <br>
                  <li><a class="sec-head" href="https://www.twitter.com">
                    <i class="fab fa-twitter mr-2"></i> Twitter
                  </a></li>
                  <br>
                  <li class="sec-head" ><a class="sec-head" href="https://www.pinterest.co.uk/jasons4348/pins/">
                    <i class="fab fa-pinterest mr-2"></i> Pinterest
                  </a></li>
                  <br>
                  <li><a class="sec-head" href="https://www.linkedin.com">
                    <i class="fab fa-linkedin mr-2"></i> Linkedin
                  </a></li>
                </ul>
              </p>

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

      $("form").submit(function (e) {


        var error = "";

        if ($('#comp_name').val() === "") {
          error += "<p>The company name is required.</p>";
        }
        if ($('#address').val() === "") {
          error += "<p>The Address is required.</p>";
        }
        if ($('#name').val() === "") {
          error += "<p>A contact name is required.</p>";
        }
        if ($('#phone').val() === "") {
          error += "<p>A phone number is required.</p>";
        }
        if ($('#email').val() === "") {
          error += "<p>An email address is required.</p>";
        }
        if (error != "") {
          $("#error").html(error);

          return false;

        } else {

          return true;

        }
      })

    </script>
  </body>
</html>
