<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>ConsumirApi</title>
    </head>
    
    <body>
    <?php        
         
        include_once("conexion.php");
        include_once("consumir.php");
       

    $ch= curl_init();

curl_setopt($ch, CURLOPT_URL,'https://reqres.in/api/users/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);

$response=curl_exec($ch);

if(curl_errno($ch)) echo curl_errno($ch);

    else
        $decoded = json_decode($response,true); 
       
curl_close($ch);     
          
    echo"<table border=1>";
    echo"<tr>";
    echo"<td>id</td>";    
    echo"<td>email</td>";
    echo"<td>first_name</td>";
    echo"<td>last_name</td>";
    echo"<td>avatar</td>";
    echo"</tr>";

    foreach($decoded as $deco =>$value){           
    var_dump($deco);
    echo"<tr>";
    echo"<td>$deco</td>";    
    echo"<td>$deco</td>";
    echo"<td>$deco</td>";
    echo"<td>$deco</td>";
    echo"<td>$deco</td>";
    }
    echo"</tr>";
    ?>                     
        <button type="submit" >Guardar</button>
    
    </body>
</html>