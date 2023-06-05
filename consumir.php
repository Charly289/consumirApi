<?php  


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
 <form action="principal.php" method="Get">
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
                <input tipe="text" value="                
                <?php 
    foreach($decoded as $deco =>$value){        
        if(isset(($value['id']))){
            echo($value['id']);
        }
        

    }
    ?>" name="id">
            </input>
            </td>
            <td>
            <input tipe="text" value="                
                <?php 
    foreach($decoded as $deco =>$value){    
        if(isset($value['email'])){
            echo($value['email']);
        }    
        
    }
    ?>" name="email">
            </td>
            <td>
            <input tipe="text" value="                
                <?php 
    foreach($decoded as $deco =>$value){ 
        if(isset($value['first_name'])){
            echo $value['first_name'];
        }       
        
    }
    ?>" name="first_name">
            </td>
            <td>
            <input tipe="text" value="                
                <?php 
    foreach($decoded as $deco =>$value){   
        if(isset($value['last_name'])){
            echo $value['last_name'];
        }     
        
    }
    ?>" name="last_name">
            </td>
            <td>
            <input tipe="text" value="                
                <?php 
    foreach($decoded as $deco =>$value){ 
        if(isset($value['avatar'])){
            echo $value['avatar'];
        }       
        
    }
    ?>" name="avatar">
    </td>        
    </tr>
</table>

<input type="submit"></input>
    </form>

    
