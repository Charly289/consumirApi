<?php

include 'conexion.php';

    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $correo=$_POST['correo'];
    $password=$_POST['password'];
    $tipo_empleado=$_POST['tipo_empleado'];
    $genero=$_POST['genero'];

    $sql = "INSERT INTO user (nombre, apellido, correo, password, tipo_empleado, genero) 
        VALUES ('$nombre', '$apellidos', '$correo', '$password', '$tipo_empleado','$genero')";

if (mysqli_query($conn, $sql)) {
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    
 
?>


