<?php

 require('conexion.php');

$nombre = $_POST['usuario'];
$pass = $_POST['password'];


$query = mysqli_query($conn, "SELECT * FROM login WHERE name ='".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr==1){
echo "Bienvenido:".$nombre;
header('location: principal.php');
return  $nr;
}
else if($nr==0){
    header('location: index.php');
}


?>
