<?php  

include 'conexion.php';

    $ch= curl_init();

curl_setopt($ch, CURLOPT_URL,'https://reqres.in/api/users/2');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_HEADER, false);

$response=curl_exec($ch);

if(curl_errno($ch)) echo curl_errno($ch);

    else
        $decoded = json_decode($response,true);        

curl_close($ch);         
 ?>
 <html>
    <head>    
    <link rel="stylesheet" type="text/css" href="style.css" >    
    </head>
 <form action="principal.php" method="GET">
 <table border=1>
    <tr>
        <td>Id</td>
        <td>Email</td>
        <td>First_name</td>
        <td>Last_name</td>
        <td>Avatar</td>
</tr>
<tr>
            <td>
                <input tipe="text" value="<?php 
                foreach($decoded as $deco =>$value){if(isset(($value['id']))){$id2=trim($value['id']);echo $id2;}       
    }?>" name="id"></input>
    </td><td><input tipe="text" value="<?php foreach($decoded as $deco =>$value){if(isset(($value['email']))){echo($value['email']);}}?>" name="email"></td><td>
            <input tipe="text" value="<?php foreach($decoded as $deco =>$value){if(isset(($value['first_name']))){echo $value['first_name'];}}?>" name="first_name"></td><td>
            <input tipe="text" value="<?php foreach($decoded as $deco =>$value){if(isset(($value['last_name']))){echo $value['last_name'];}}?>" name="last_name"></td><td>
            <input tipe="text" value="<?php foreach($decoded as $deco =>$value){if(isset(($value['avatar']))){echo $value['avatar'];}}?>" name="avatar"></td></tr>
        </table>
 </form>
 <form action="add_api.php" method="GET">
        <button type="submit">Consumir</button>
        <table border=1>
        <tr>
        <td>Id</td>
        <td>Email</td>
        <td>First_name</td>
        <td>Last_name</td>
        <td>Avatar</td>
</tr>
<tr>
<tr>
        <td><input type="text" name="id_add"></input></td>
        <td><input type="text" name="email_add"></input></td>
        <td><input type="text" name="first_name_add"></input></td>
        <td><input type="text" name="last_name_add"></input></td>
        <td><input type="text" name="avatar_add"></input></td>
</tr>
<tr>
    
        </table>
        <button type="submit">Agregar</button>

</form>
        <a href="principal.php"><button type="button">Principal</button></a>
        <br><br>
        <a href="index.php"><button type="button">Salir</button></a>
        
 </html>