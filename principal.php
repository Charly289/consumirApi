
<html>
    <h1>Datos Guardados</h1>
    <a href="consumir.php"><button type="button">Agregar</button></a>
    <br>
    <br>
    <a href="index.php"><button type="button">Salir</button></a>

<?php
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

    

$servername = "localhost";
$database = "consumirapi";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
echo "Connected successfully";
 
$sql = "INSERT INTO users (id, email, first_name, last_name, avatar) 
        VALUES ('$idc', '$emailc', '$first_namec', '$last_namec','$avatarc')";
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully".$emailc;
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
    ?>

</html>
    