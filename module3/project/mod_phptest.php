<?php
include 'mod3php.php';
include 'mod3_opendb.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP Test</title>
</head>

<body>
<?php
$sql = "SELECT fname, lname, city, zip FROM customers LIMIT 4";

$result = mysqli_query($conn, $sql);
 if(mysqli_num_query($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {     /*outputs the data from the database*/
     echo "fname: " . $row ["fname"] . "<br>";
     echo "lname: " . $row ["lname"] . "<br>";
     echo "city: " . $row ["city"] . "<br>";
     echo "zip: " . $row ["zip"] . "<br><hr>";
   }
 }else {
   echo "0 results";
 }

 mysqli_close($conn);
?>
</body>

</html>
