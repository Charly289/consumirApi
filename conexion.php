<?php

class conexion{
function conexiondb(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="consumirapi";
    
    try{
        $conn=new PDO("mysql:host=$server;dbname=$db",$user,$pass);
        echo"Conexión Exitosa";
    }catch(PDOException $e){
        echo("Error de Conexión:$db, error:$e");

    }
    return $conn;

}

}

?>