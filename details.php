<?php 
require_once('./db/config.php');

if (isset($_POST['submit'])) {
    $countryName = trim($_POST['search']);
    $sql = "SELECT * FROM countries WHERE country_name='$countryName' ";
    if($sql){
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        ?>
        <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <div class="row mt-5">
      <div class="col-5 mx-auto">
        <div class="card shadow text-center">
         
          <div class="card text-center">
  <div class="card-header"><?= $row['country_name'] ?></div>
  <div class="card-body">
    <h5 class="card-title">Country Code :</b> <?= $row['country_code'] ?></h5>
    <p class="card-text"><?= $row['city'] ?></p>
  </div>
  <div class="card-footer text-muted"><?= $row['id'] ?></div>
</div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php
    }
    }
    
?>
