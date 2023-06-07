<?php

include 'conexion.php';

$nombre=$_POST["usuario"];
$pass=$_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario='".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr==1){
echo "Bienvenido:".$nombre;
}
else if($nr==0){
    echo "NO SE PUDO INGRESAR";
}

?>
<html>
    <body>
        <form action="consumir.php" method="get">
            <table border="1">
                <tr>
                    <td>
                    <label>Registrar Datos</label>
                    </td>
                </tr>
                <tr>
                    <td>
                    <button type="submit" name="registrar">Agregar</button>

                    </td>
                </tr>
            </table>
                       

        </form>
    </body>
    
    </html>