<?php

include 'conexion.php';


$nombre=$_POST["usuario"];
$pass=$_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario='".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr==1){
echo "Bienvenido:".$nombre;
header('location: principal.php');
}
else if($nr==0){
    echo "NO SE PUDO INGRESAR";
    
header('location: index.php'."NO se puede ingresar");
}

?>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css" >
    </head>
    <body>
        <form action="consumir.php" method="get">
            <table>
                <tr>
                    <td>
                    <label>Registrar Datos</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <button type="submit"  name="registrar">Agregar</button>
                    </td>
                </tr>
            </table>
                       

        </form>
    </body>
    
    </html>