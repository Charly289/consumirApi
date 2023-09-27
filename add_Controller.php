<?php

include 'conexion.php';

        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "12345";
        $dbname ="cunsumirapi";

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];
        $tipo_empleado = $_POST['tipo_empleado'];
        $genero = $_POST['genero'];
        

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";


    $sql = "INSERT INTO user (nombre, apellidos, correo, password, tipo_empleado, genero) 
        VALUES ('$nombre', '$apellidos', '$correo', '$password', '$tipo_empleado','$genero')";

if (mysqli_query($conn, $sql)) {  

    echo("Datos Agregados12");
    
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      
}
mysqli_close($conn);    
 
?>


