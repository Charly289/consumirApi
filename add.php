<html>
    <head>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
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

  <form action="add_Controller.php" method="POST">
  

    <label for="fname">Nombre</label>
    <input type="text" id="nombre" name="nombre" placeholder="Nombre">
    <br>
    <label for="lname">Apellido</label>
    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos">
    <br>
    <label for="correo">Correo</label>
    <input type="email" id="correo" name="correo" placeholder="Correo">
    <br>
    <label for="correo">Password</label>
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
    <button class="button button2" type="submit" value="Submit">Agregar</button>
  </form>
  <table class="table table-responsive table-bordered" id="addtable">
      <thead>
        <td>Nombre</td>
        <td>Apellido</td>
        <td>Correo</td>
      </thead>
      <tr>
        <td>Null</td>
        <td>Null</td>
        <td>Null</td>
      </tr>

  </table>
  </div>  
  <div class="column add"></div>     
</div>
<div class="footer">
  <h2>Footer</h2>
</div>  
<script type="text/javascript">    
    $(document).ready(function(){
        $("#addtable").DataTable({
            ajax: "loaddata.php"
        });
    });
</script>
<script type="text/javascript" src="datatables/datatables.min.js"></script>
</body>    

</html>
    