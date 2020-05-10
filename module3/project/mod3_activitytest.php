<!--Checks and connects to database-->
<?php
include 'mod3php.php';
include 'mod3_opendb.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Jonas Nation PHP Connection</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
  <h3>Customers!</h3>
  <p>This page is for the selection of customer information for Deluxe Metal.</p>

  <?php
  $sql = "SELECT fname, lname, city, zip FROM customers LIMIT 4";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          echo "fname: " . $row["fname"]. " lname: " . $row["lname"]. " city: " . $row["city"]. " zip: " .$row["zip"]. "<br>";
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
  ?>
  </div>
</body>
</html>
