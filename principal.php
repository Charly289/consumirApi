
<html>
    <h1>Datos Guardados</h1>
    <a href="consumir.php"><button type="button">Agregar</button></a>
    <br>
    <br>
    <a href="index.php"><button type="button">Salir</button></a>

<?php

include 'conexion.php';

    $id=isset($_GET['id']);
    $email=isset($_GET['email']);
    $first_name=isset($_GET['first_name']);
    $last_name=isset($_GET['last_name']);
    $avatar=isset($_GET['avatar']);

    $idc=trim($id);
    $emailc=trim($email);
    $first_namec=trim( $first_name);
    $last_namec=trim($last_name);
    $avatarc=trim($avatar);

    $id_add=isset($_GET['id_add']);
    $email_add=isset($_GET['email_add']);
    $first_name_add=isset($_GET['first_name_add']);
    $last_name_add=isset($_GET['last_name_add']);
    $avatar_add=isset($_GET['avatar_add']);

    $idc=trim($id);
    $emailc=trim($email);
    $first_namec=trim( $first_name);
    $last_namec=trim($last_name);
    $avatarc=trim($avatar);

    $idc2=trim($id_add);
    $emailc2=trim($email_add);
    $first_namec2=trim($first_name_add);
    $last_namec2=trim($last_name_add);
    $avatarc2=trim($avatar_add);  

 
$sql = "INSERT INTO users (id, email, first_name, last_name, avatar) 
        VALUES ('$idc', '$emailc', '$first_namec', '$last_namec','$avatarc')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    ?>

</html>
    