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
        
        showUpdateAccountForm();
        // getTypeAccount();
        //getMessagesChat();



    
        
        }

        var idAccount=0;

            function showUpdateAccountForm(){
                // validate jwt to verify access
                var jwt = getCookie('jwt');
                $.post("api/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
                
                console.log(result);
                    idAccount = result.data.id;

                    
                    document.getElementById("firstnameP").value = result.data.firstname;
                    document.getElementById("lastnameP").value = result.data.lastname;
                    document.getElementById("emailP").value = result.data.email;


                    var dd = document.getElementById('genderP');
                    dd.selectedIndex = result.data.genero;
                    


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

                    <div class="col-md-6">
                                <div class="media">
                                    <label>Nombre</label>
                                    <input type="text" name="firstnameP" id="firstnameP" required disabled class="form-control"/>
                                </div>
                                <div class="media">
                                    <label>Correo Electronico</label>
                                    <input name="emailP" id="emailP" type="email" required disabled class="form-control"/>
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
                                    <input type="text" class="form-control" name="lastnameP" id="lastnameP" required disabled />
                                    
                                </div>
                                <div class="media">
                                    <label>Fecha de nacimiento</label>
                                    <input id="birthdayP" disabled type="date" name="birthdayP"  min='1899-01-01' max="<?=date('Y-m-d',strtotime('now'));?>" style="margin-bottom: 5%; "/>
                                </div>
                                <div class="media">
                                    <label>Contraseña</label>
                                    <input name="passwordP" id="passwordP" type="password" required disabled class="form-control"/>
                                </div>

                                <button style="margin-top: 5%">Editar Perfil</button>
                                <button style="margin-top: 5%">Guardar Perfil</button>
                                <button>Cancelar </button>
                        
                    </div>
                </div>

                <div class="col-lg-6">
                    <h3 class="dark-color">Dirección</h3>

                    <ul>
                        <li>
                            <div>
                                <dt>Direccion</dt>
                                <dd>Colonia, Calle, numero ext, numero int</dd>
                                <dt>Localidad</dt>
                                <dd>País, estado, municipio, cp</dd>
                            </div>
                        </li>
                    </ul>

                    <button style="margin-top: 3%">Editar dirección</button>
                    <button style="margin-top: 3%">Agregar dirección</button>
                </div>

            </div>

            
        </div>
    </section>
</body>
</html>