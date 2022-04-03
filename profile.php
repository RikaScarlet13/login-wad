<?php
    include_once 'header.php';
    include_once './includes/dbh.inc.php';
    
?>


<!-- dili ko alam saan ko lalagay si session start AHAHHA -->

<!-- SESSION_START();

if (!isset($_SESSION["userId"])) {
    header("location : index.php");
} -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/vapor/bootstrap.min.css">
    <title>Profile</title>
</head>
<body>
    <div class="wrapper">
      <div class="content" id="content">
        <div class="menu">
          <h1>Profile</h1>
          <a href="./login.php">Log out</a>
        </div>
        
        <div class="table-form">
          <table class="table">
            <tr class="table-row table-head-container">
              <th class="table-head">ID No.</th>
              <th class="table-head">Address ID</th>
              <th class="table-head">First name</th>
              <th class="table-head">Last name</th>
              <th class="table-head">Email address</th>
              <th class="table-head">Salutation ID</th>
              <th class="table-head">Suffix ID</th>
              <th class="table-head">Suffix ID</th>
            </tr>
           
          <?php
          include_once './includes/profile.inc.php';
          ?>
            
          </table>
          
        </div>
      </div>
    </div>
</body>
</html>

<?php
    include_once 'footer.php'
?>