<script>

  $("form").submit(function (e) {

    var error = "";

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
