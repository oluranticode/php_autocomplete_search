<?php require_once('./db/config.php')  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>AutoComplete Search</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">

</head>

<body class="bg-success">
  <div class="container">
    <div class="row mt-4">
      <div class="col-md-10 mx-auto bg-light rounded p-4">
        <h5 class="text-center font-weight-bold">AutoComplete Search </h5>
        <hr class="">
        <h5 class="text-center text-secondary">Write any country name in the search box</h5>
        <form action="details.php" method="post" class="p-3">
          <div class="input-group">
            <input type="text" name="search" id="search" class="form-control form-control-sm rounded-0 border-success" 
            placeholder="Search..." autocomplete="off" required>
            <div class="input-group-append">
              <input type="submit" name="submit" value="Search" class="btn btn-success btn-sm rounded-0">
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-5 mx-auto" style="position: relative;margin-top: -38px;">
        <div class="list-group mx-auto" id="show-list">
          <!-- Here autocomplete list will be display -->
         
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      $(document).ready(function () {
  // Send Search Text to the server
  $("#search").keyup(function () {
    let searchText = $(this).val();
    if (searchText != "") {
      $.ajax({
        url: "action.php",
        method: "post",
        data: {
          query: searchText,
        },
        success: function (response) {
          $("#show-list").html(response);
        },
      });
    } else {
      $("#show-list").html("");
    }
  });
  // Set searched text in input field on click of search button
  $(document).on("click", "a", function () {
    $("#search").val($(this).text());
    $("#show-list").html("");
  });
});
  </script>
  <!-- <script src="script.js"></script> -->
</body>

</html>