<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $db='car_site';
  // Create connection
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connect successfully";
?>
