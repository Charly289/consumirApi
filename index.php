<html>
    <style>
        table{
            border:2px solid #353A46;
            background-color: #3ABAF1;
        }

        input[type=text],input[type=password]{
            width:100%;
            padding:8px 20px;
            border: 2px solid #ccc;
            box-sizing: border-box;
        }
        img{
            width: 100px;
            height: 100px;
        }
        label{
            font-size: 14px;
            font-weight: bold;
            font-family: arial;
        }
        
        input[type=submit]{
            background-color: #1C94C8;
            color:white;
            padding: 8px 10px;
            margin: 8px 0px;
            border: solid 1px white;
            cursor: pointer;
            width: 40%;
        }

    </style>
    <center>
        <form method="post" action="login.php">
            <table>
                <tr><td colspan="2" style="background-color: #33A8BD; padding-bottom: 5px; padding-top:5px;"><label>Login</label></td></tr>
                <tr><td align="center" rowspan="5"><img src="candado.png"></td><td><label>Usuario</label></td></tr>
                <tr><td><input type="text" name="usuario"></td></tr>
                <tr><td><label>Password</label></td></tr>
                <tr><td><input type="password" name="password"></td></tr>
                <tr><td align="center"><input type="submit" value="Ingresar"></td></tr>
            </table>
        </form>

    </center>
</html>