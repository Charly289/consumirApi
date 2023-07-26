

$(document).ready( function() {   // Esta parte del código se ejecutará automáticamente cuando la página esté lista.
   $("#botonenviar").click( function() {     // Con esto establecemos la acción por defecto de nuestro botón de enviar.
       if(validaForm()){                               // Primero validará el formulario.
           $.post("login.php",$("#formdata").serialize(),function(res){
            
               $("#formulario").fadeOut("slow");   // Hacemos desaparecer el div "formulario" con un efecto fadeOut lento.
               if(res == 1){
                   //$("#exito").delay(500).fadeIn("slow");      // Si hemos tenido éxito, hacemos aparecer el div "exito" con un efecto fadeIn lento tras un delay de 0,5 segundos.
               alert("Usuario Registrado".res);
                  } else {
                   //$("#fracaso").delay(500).fadeIn("slow");    // Si no, lo mismo, pero haremos aparecer el div "fracaso"
                  alert("Usuario no Registrador".res); 
               }
           });
       }
   });   
         function validaForm(){
            if($("#usuario").val()==""){
            alert("El campo de Usuario esta vacío.");
               $("#usuario").focus();
               return false;
            }
            if($("#password").val()==""){
               alert("El campo de Password esta vacío.");
               $("#password").focus();
               return false;
            }
            return true;
            } 
});

