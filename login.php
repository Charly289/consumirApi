<?php

$dbhost = "localhost" ;
$dbuser = "root";
$dbpass = "";
$dbname ="consumirapi";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
    die("No hay conexión: ".mysqli_connect_error());

}

$nombre=isset($_POST["usuario"]);
$pass=isset($_POST["password"]);

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