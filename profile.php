<?php
include_once 'navbar/navbar.php';
//include_once 'footer/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!---https://www.bootdey.com/snippets/view/about-me#html-->
  
    <title>Perfil</title>

    
    <link rel="stylesheet" href="css/profile.css">

    <script>

        $(document).ready()
        {
        
            getUserInfo();
            getUserAddress();
            //getMessagesChat();
        
        }

        var idAccount=0;

        function getUserInfo(){
                // validate jwt to verify access
                var jwt = getCookie('jwt');
                $.post("api/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
                
        
                    idAccount = result.data.id;

                    
                    document.getElementById("firstnameP").value = result.data.firstname;
                    document.getElementById("lastnameP").value = result.data.lastname;
                    document.getElementById("emailP").value = result.data.email;


                    document.getElementById("telefonoP").value = result.data.telefono;

                    

                    var dd = document.getElementById('genderP');
                    dd.selectedIndex = result.data.genero;
                    

                    //alert(result.data.birthday);

                    //console.log(result.data);
                    if(result.data.birthday!=null)
                    document.getElementById('birthdayP').value = result.data.birthday;
                    
                    

                    $bien = "Hola";
                    $fname = result.data.firstname; 
                    $space = " ";
                
                    $lname = result.data.lastname; 

                    $("#bienvenida").html($bien+$space+$fname+$space+$lname);
                                      


        
                })
            
                // on error/fail, tell the user he needs to login to show the account page
                .fail(function(result){
        
                    $('#mensaje').html("<div class='alert alert-danger'>Please login to access the account page.</div>");
                });
        }

        function getUserAddress(){
                // validate jwt to verify access
                var jwt = getCookie('jwt');
                $.post("api/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
                
          
                    idAccount = result.data.id;


             
                    $.ajax({
                    url: "php/getAddress.php",
                    type : "POST",
                    data: {'idUser': idAccount,'function': 1}, 
                    success : function(result) {

                           // alert(result);
                            $("#profileAddress").html(result);  
                            $("#btnDireccion").html("Editar dirección");  
                                                   

                        },
                        error: function(xhr, resp, text){
                            // on error, tell the user sign up failed

                            console.log("Error al traer   " + text);
                            console.log("Response text  " + xhr.responseText);
                            $("#btnDireccion").html("Agregar dirección");  
                            //$('#response-sign').html("<div class='alert alert-danger'>Unable to sign up. Please contact admin.</div>");
                        }
                    });
                                      
                })
            
                // on error/fail, tell the user he needs to login to show the account page
                .fail(function(result){
        
                    
                });
        }

        $(document).on('click', '.direccionOptions', function() {

          window.location = 'address.php';

           /* var jwt = getCookie('jwt');
            $.post("api/validate_token.php", JSON.stringify({ jwt:jwt }))
            .done(function(result) {
                var userMail = result.data.email;
            


                $.ajax({
                    url: "diploma/getDiploma.php",
                    type : "POST",
                    data: {'course': nivelName,'mail': userMail}, 
                    success : function(result) {

                    //alert(result);
                        $("#diplomaAlumno").html(result);                         

                    },
                    error: function(xhr, resp, text){
                        // on error, tell the user sign up failed
                        window.location = ' error/404.html';
                        console.log("Error al crear cuenta  " + text);
                        console.log("Response text  " + xhr.responseText);
                        //$('#response-sign').html("<div class='alert alert-danger'>Unable to sign up. Please contact admin.</div>");
                    }
                });
            
            })
            .fail(function() {

            });*/


        });

        $(function(){ /* DOM ready */
          $(".edit-things").click(function() {
              //alert('best take my own advice ');
              
              $('input[type=text], input[type=email], input[type=password], input[type=number]').removeAttr('readonly');

              document.getElementById("birthdayP").disabled = false;
              document.getElementById("genderP").disabled = false;

              $('.save-things').css( "display", "" );
             
              $(this).css( "display", "none" );
              $('.cancel-things').css( "display", "" );
            
          });
      });

      $(function(){ /* DOM ready */
          $(".cancel-things").click(function() {
              //alert('best take my own advice ');
              
              $('input[type=text], input[type=email], input[type=password], input[type=number]').prop('readonly', true);
              document.getElementById("birthdayP").disabled = true;
              document.getElementById("genderP").disabled = true;

              $('.save-things').css( "display", "none" );

             
              $(this).css( "display", "none" );
              $('.edit-things').css( "display", "" );
            
          });
      });


    $(document).on('submit', '#update_account_form', function(){

        $.fn.serializeObject = function()
		{
		var o = {};
		var a = this.serializeArray();
		$.each(a, function() {
			if (o[this.name]) {
				if (!o[this.name].push) {
					o[this.name] = [o[this.name]];
				}
				o[this.name].push(this.value || '');
			} else {
				o[this.name] = this.value || '';
			}
		});
		return o;
		};


        var update_account_form=$(this);
        var jwt = getCookie('jwt');
        var update_account_form_obj = update_account_form.serializeObject();

        update_account_form_obj.jwt = jwt;
        var form_data=JSON.stringify(update_account_form_obj);

        

        $.ajax({
            url: "api/update_user.php",
            type : "POST",
            contentType : 'application/json',
            data : form_data,
            success : function(result) {
        
                //console.log(result);
                setCookie("jwt", result.jwt, 1);

                $('input[type=text], input[type=email], input[type=password], input[type=number]').prop('readonly', true);
                document.getElementById("birthdayP").disabled = true;
                document.getElementById("genderP").disabled = true;

                $('.edit-things').css( "display", "" );
                $('.save-things').css( "display", "none" );
                
               
                $('.cancel-things').css( "display", "none" );


               
            },
        
            // show error message to user
            error: function(xhr, resp, text){
                console.log("Error al iniciar sesion " + text);
				        console.log("Response text  " + xhr.responseText);

            }
        });

 return false;
    });


    </script>


</head>
<body>
    <section class="section about-section gray-bg" id="about">
        <div class="container">

            <div class="row align-items-center flex-row-reverse" style="margin-bottom: 3%">

                <div class="col-lg-6">
                    <div class="about-text go-to">
                        <h3 class="dark-color" id="bienvenida">Hola NombreUsuario</h3>
     
                    </div>
                </div>
                
                <div class="col-lg-6">
               
                </div>

            </div>

            

            <div class="counter" style="margin-bottom: 3%">
                <div class="row">
                    <div class="col-7 col-lg-4">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                            <p class="m-0px font-w-600">Cantidad de Ordenes</p>
                        </div>
                    </div>
                    <div class="col-7 col-lg-4">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                            <p class="m-0px font-w-600">Puntos Acumulados</p>
                        </div>
                    </div>
                    <div class="col-7 col-lg-4">
                        <div class="count-data text-center">
                            <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                            <p class="m-0px font-w-600">Calificación</p>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="row align-items-center flex-row-reverse">


                <div class="col-lg-6">
                    <h3 class="dark-color">Datos generales</h3>

                    <form id="update_account_form">
                            
                        <div class="col-md-6">
                                    <div class="media">
                                        <label>Nombre</label>
                                        <input type="text" name="firstnameP" id="firstnameP" required readonly class="form-control"/>
                                    </div>
                                    <div class="media">
                                        <label>Correo Electronico</label>
                                        <input name="emailP" id="emailP" type="email" required readonly class="form-control"/>
                                    </div>

                                    <div class="media">
                                        <label>Telefono</label>
                                        <input name="telefonoP" id="telefonoP" type="number" readonly class="form-control"/>
                                    </div>
                                    
                                    <div class="media">
                                        <label>Género</label>
                                        <div class="form-group">
                                
                                            <select class="form-control" id="genderP" name="genderP" disabled required>
                                            <option value="">Seleccionar</option>
                                            <option value="1">Mujer</option>
                                            <option value="2">Hombre</option>
                                            <option value="3">No binario</option>
                                            <option value="4">Ninguno/Agénero</option>
                                            <option value="5">Prefiero no decir</option>
                                            </select>
                                        </div>
                                    </div>
                        </div>

                        <div class="col-md-6">
                                    <div class="media">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" name="lastnameP" id="lastnameP" required readonly />
                                        
                                    </div>
                                    <div class="media">
                                        <label>Fecha de nacimiento</label>
                                        <input id="birthdayP" disabled type="date" name="birthdayP"  min='1899-01-01' max="<?=date('Y-m-d',strtotime('now'));?>" style="margin-bottom: 5%; "/>
                                    </div>
                                    <div class="media">
                                        <label>Contraseña</label>
                                        <input name="passwordP" id="passwordP" type="password" readonly class="form-control"/>
                                    </div>
                            
                        </div>

                        <button  type="button"  class="edit-things" style="margin-top: 5%">Editar Perfil</button>
                        <button type='submit'  class="save-things" style="margin-top: 5%; display:none;">Guardar Perfil</button>
                        <button  type="button"  onclick="getUserInfo();"  class="cancel-things" style="margin-top: 5%; display:none;">Cancelar </button>

                           
                    </form>

                </div>

                <div class="col-lg-6">
                    <h3 class="dark-color">Dirección</h3>

                    <ul id="profileAddress">
                        
                    </ul>

                    <button id="btnDireccion" class="direccionOptions" style="margin-top: 3%"></button>
                </div>

            </div>

            
        </div>
    </section>
</body>
</html>