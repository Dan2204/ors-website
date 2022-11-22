

<?php

  $error = "";

  if ($_POST) {

    if (!$_POST["name"]){
      $error .= "A contact name is required.<br>";
    }
    if (!$_POST["phone"]){
      $error .= "A phone number is required.<br>";
    }
    if (!$_POST["email"]){
      $error .= "An email address is required.<br>";
    }
    if ($_POST['email'] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
      $error .= $_POST['email'] ." is not a valid email address.<br>";
    }

    if ($error != ""){
      $error = '<div class="alert alert-danger" role="alert"><p>Errors</p>' . $error . '</div>';
    } else {

      $emailTo = "enquiries@officerelocationservices.co.uk";
      // $emailTo = "dan.lucas2204@sky.com";

      $subject = "Website Enquiry (" . $form_page . ")";

      $content = "Company: " . $_POST['comp_name'] . "\n" . "Contact Name: " . $_POST['name']
      . "\n" . "Tel: " . $_POST['phone'] . "\n" . "Email: " . $_POST['email']
      . "\n" . "Message: " . $_POST['message'];

      // $headers = "From: " . $_POST['email'];
      $headers = "From: website@officerelocationservices.co.uk";
      // $headers = "From: website@dlucasonline.com";

      if (mail($emailTo, $subject, $content, $headers)){

        $error = '<div class="alert alert-success" role="alert"><p>Form sent, We will be in touch ASAP</p>' . $error . '</div>';

      }else{
        $error = '<div class="alert alert-success" role="alert"><p>Unsuccessfull, please try again later.</p>' . $error . '</div>';
      }
      $emailTo = "dan.lucas2204@sky.com";
      mail($emailTo, $subject, $content, $headers);

    }
  }
?>
