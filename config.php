<?php
   $dbhost = 'mysql.hostinger.in';
   $dbuser = 'u186010532_avk';
   $dbpass = 'abhi.avk';
   $db='	u186010532_abhi';
  // Create connection
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#echo "Connect successfully";
?>
