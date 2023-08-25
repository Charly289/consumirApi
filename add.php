<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css"> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

    </head>
    <body>
    
<div class="topnav">
  <a href="principal.php">Home</a>
  <a href="principal.php">Principal</a>
  <a href="index.php">Salir</a>  
</div>

<div class="row">
  <div class="column add"></div>
  <div class="column add center">
  <img  src="public\imagenes\add_user.png">

  <form name="formdata" onsubmit="agregar(); return false">
  

    <label for="fname">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
    <br>
    <label for="lname">Apellido</label>
    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
    <br>
    <label for="correo">Correo</label>
    <input type="email" id="correo" name="correo" placeholder="Correo">
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="password">
    <br>
    <label for="tipo">Tipo </label>
    <select id="tipo_empleado" name="tipo_empleado">
      <option value="administrador">Administrador</option>
      <option value="empleado">Empleado</option>      
    </select>
    <br>
    <label for="genero">Genero</label>
    <select id="genero" name="genero">
      <option value="hombre">Hombre</option>
      <option value="mujer">Mujer</option>
      <option value="otro">Otro</option>
    </select>
    <br>
        
    <button type="submit" class="button button2" id="agregar" name="agregar" >Agregar</button>

    <script>      
       nombre = document.getElementById('nombre').value;
       apellidos = document.getElementById('apellidos').value;
       correo = document.getElementById('correo').value;
       password = document.getElementById('password').value;
       tipo_empleado = document.getElementById('tipo_empleado').value;
       genero = document.getElementById('genero').value;

       data  =  {
                  nombre,apellidos,correo,password,tipo_empleado,genero
      };              
                

$(document).ready(function(){
        $("#agregar").click(function(e){
          e.preventDefault();
          $.ajax({
            type:"POST",
            url:"add_Controller.php",
            data:data,
            dataType:"json",
            success: function(response){
            
            }
                    
        });
});
});
        
    </script>

    
  </form>
  </div>  
  <div class="column add"></div>     
</div>
<div class="footer">
  <h2>Footer</h2>
</div>  
</body>    

</html>
    