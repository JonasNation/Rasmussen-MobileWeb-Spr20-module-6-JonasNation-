<?php
include 'mod3php.php';
include 'mod3_opendb.php';

$sql = "SELECT fname, lname, city, zip FROM customers LIMIT 3";

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
