<html>
    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>


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

  <form name="form_data" id="form_data" >
  

    <label for="fname">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre" required>
    <br>
    <label for="lname">Apellido</label>
    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" required>
    <br>
    <label for="correo">Correo</label>
    <input type="email" id="correo" name="correo" placeholder="Correo" required>
    <br>
    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="password" required>
    <br>
    <label for="tipo">Tipo </label>
    <select id="tipo_empleado" name="tipo_empleado">
      <option value="administrador">Administrador</option>
      <option value="empleado">Empleado</option>      
    </select>
    <br>
    <label for="genero">Genero</label>
    <select id="genero" name="genero" required>
      <option value="hombre">Hombre</option>
      <option value="mujer">Mujer</option>
      <option value="otro">Otro</option>
    </select>
    <br>
        
    <button type="submit" class="button button2" id="agregar" name="agregar" >Agregar</button>

    <script>  
    
        $('#form_data').submit(function(e){
          e.preventDefault();

       nombre = $('#nombre').val();
       apellidos = $('#apellidos').val();
       correo = $('#correo').val();
       password = $('#password').val();
       tipo_empleado = $('#tipo_empleado').val();
       genero = $('#genero').val();

    const url='http://localhost/consumirapi/add_Controller.php';


    $.ajax({
          headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },            
            url:url,
            data:{
              nombre:nombre,
              apellidos:apellidos,
              correo:correo,
              password:password,
              tipo_empleado
            },
            type:"POST",
            success: function(response){
              alert("Datos Agregados");    
              clear();        
            },
            error: function() {
        alert('There was some error performing the AJAX call!');
      }  
                    
        });
});
function clear(){
          $('#nombre').val('');
          $('#apellidos').val('');
          $('#correo').val('');
          $('#password').val('');
          $('#tipo_empleado').val('');
        }
        
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
    