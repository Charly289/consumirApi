<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css" >    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="consumir.js"></script>
    </head>
    <div class="div-form" id="formulario">
        <form method="POST" id="formdata" action="login.php">
            <table class="input_login">
                <tr><td colspan="2" style="background-color: #33A8BD; padding-bottom: 5px; padding-top:5px;"><label>Login</label></td></tr>
                <tr><td align="center" rowspan="5"><img src="candado.png"></td><td><label>Usuario</label></td></tr>
                <tr><td><input id="usuario" class="input" type="text" name="usuario"  placeholder="Usuario"></td></tr>

                <tr><td><label >Password</label></td></tr>
                <tr><td><input id="password" type="password" class="input_login" name="password"  placeholder="Password"></td></tr>
                <tr><td>                    
                    <button class="button button2" type="submit"  name="ingresar">Ingresar</button>
                    <button class="button button2" href="index.php"  name="add.php">Registrar</button>
                    <button class="button button2" id="botonenviar" onclick="validaform()">Test</button>
                </td>
                </tr>
            </table>
        </form>
        

</div>
</html>