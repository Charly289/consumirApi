<?php    


    $ch= curl_init();

curl_setopt($ch, CURLOPT_URL,'https://reqres.in/api/users/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_HEADER, false);

$response=curl_exec($ch);

if(curl_errno($ch)) echo curl_errno($ch);

    else
        $decoded = json_decode($response,true);        

curl_close($ch);    

foreach($decoded as $deco=>$value){  
    echo"<table border=1>";
    echo"<tr>";
    echo"<td>id</td>";
    echo"<td>email</td>";
    echo"<td>first_name</td>";
    echo"<td>last_name</td>";
    echo"<td>avatar</td>";
    echo"</tr>";
    
    echo"<tr>";
    echo "<td>";
        echo $value[0]['id'];     
        echo "</td>";
        echo "<td>";
        echo $value[0]['email'];
        echo "</td>";
        echo "<td>";
        echo $value[0]['first_name'];
        echo "</td>";
        echo "<td>";
        echo $value[0]['last_name'];
        echo "</td>";
        echo "<td>";
        echo $value[0]['avatar'];        
        echo "</td>"; 
        echo "</tr>";  
        echo "</table>";
    } 
    ?>                     

    
