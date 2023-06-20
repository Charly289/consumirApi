<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" >
    </head>
    <div class="div-form">
        <form method="POST" action="login.php">
            <table class="input_login">
                <tr><td colspan="2" style="background-color: #33A8BD; padding-bottom: 5px; padding-top:5px;"><label>Login</label></td></tr>
                <tr><td align="center" rowspan="5"><img src="candado.png"></td><td><label>Usuario</label></td></tr>
                <tr><td><input class="input" type="text" name="usuario"></td></tr>
                <tr><td><label >Password</label></td></tr>
                <tr><td><input type="password" name="password"></td></tr>
                <tr><td>                    
                    <button class="button button2" type="submit"  name="ingresar">Ingresar</button>
                    <button class="button button2" href="index.php"  name="add.php">Registrar</button>
                </td>
                </tr>
            </table>
        </form>

</div>
</html>