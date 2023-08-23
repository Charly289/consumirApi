       
         
    
         function validaForm(){
        
            var usuario = document.getElementById('usuario').value;
            var password = document.getElementById('password').value;


            //alert(data[0]);
                   
            if(usuario.length==0){
            alert("El campo de Usuario esta vacío.");
               $("#usuario").focus();
               return false;
            }
            if(password.length==0){
               alert("El campo de Password esta vacío.");
               $("#password").focus();
               return false;
            }
            $.ajax({
                data:{usuario,password},
                url:('login.php'),
                type:'POST',
                type:'json',               
            success:  function (response) {
                if(response){
                    console.log("true");
                }else{
                    console.log("false").response;
                }
            },
            Error:function(error){
                console.log("error");
            }

            });
            } 

         


