<?php

$ch=curl_init();

$id_add=$_GET['id_add'];
$email_add=$_GET['email_add'];
$first_name_add=$_GET['first_name_add'];
$last_name_add=$_GET['last_name_add'];
$avatar_add=$_GET['avatar_add'];

$array=[
    'id'=>$id_add,
    'email'=>$email_add,
    'first_name'=>$first_name_add,
    'last_name'=>$last_name_add,
    'avatar'=>$avatar_add
];
$data=http_build_query($array);

curl_setopt($ch, CURLOPT_URL,'https://reqres.in/api/users');
curl_setopt($ch, CURLOPT_POST,TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);

$response=curl_exec($ch);

if(curl_errno($ch)) echo curl_error($ch);
else $decoded =json_decode($response, TRUE);

    
?>
<html>
    <h1>DATOS AGREGADOS</h1>
    <a href="principal.php"><button type="button">Principal</button></a>
    <a href="consumir.php"><button type="button">Agregar</button></a>
</html>