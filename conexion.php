<?php
    $dbhost = "localhost" ;
    $dbuser = "root";
    $dbpass = "";
    $dbname ="consumirapi";
    
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfull";
echo "<br>";
?>