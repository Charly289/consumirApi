<?php

include 'conexion.php';


        $nombre = (isset($_POST['nombre']));
        $apellidos = (isset($_POST['apellidos']));
        $correo = (isset($_POST['correo']));
        $password = (isset($_POST['password']));
        $tipo_empleado = (isset($_POST['tipo_empleado']));
        $genero = (isset($_POST['genero']));


    $sql = "INSERT INTO user (nombre, apellido, correo, password, tipo_empleado, genero) 
        VALUES ('$nombre', '$apellidos', '$correo', '$password', '$tipo_empleado','$genero')";

if (mysqli_query($conn, $sql)) {  

    echo("Datos Agregados");
    
 
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      
}
mysqli_close($conn);    
 
?>


