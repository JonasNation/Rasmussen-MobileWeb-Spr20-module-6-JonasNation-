<?php
/*create connection to database*/
$conn = mysqli_connect ($servername, $username, $password, $dbname);
/*checks connection to database*/
if(!$conn){
  die("connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
