<?php
include_once 'navbar/navbar.php';
//include_once 'footer/footer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dirección</title>


	<script src="js/loginValidation.js"></script>


	<script>
		    /*----------------------------------------------SIGN IN---------------------------------------*/


     // trigger when registration form is submitted
	 $(document).on('submit', '#sign_up_form', function(){
		
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

		// get form data
		var sign_up_form=$(this);
		var form_data=JSON.stringify(sign_up_form.serializeObject());

		

		//console.log(form_data);

		// submit form data to api
		$.ajax({
			url: "/.php",
			type : "POST",
			contentType : 'application/json',
			data : form_data,
			success : function(result) {
				// if response is a success, tell the user it was a successful sign up & empty the input boxes
				//alert(result);
				$( "#navbarLogin" ).hide();
				$( "#navbarLogged" ).show();
				sign_up_form.find('input').val('');
				window.location = 'index.php';
			},
			error: function(xhr, resp, text){
				// on error, tell the user sign up failed
				console.log("Error al crear cuenta  " + text);
				console.log("Response text  " + xhr.responseText);
				$('#response-sign').html("<div class='alert alert-danger'>Unable to sign up. Please contact admin.</div>");
			}
		});

		return false;
	});

    $(document).ready()
        {

       //https://jonathanmelgoza.com/blog/select-dinamico-de-estados-y-municipios-con-jquery-y-php/
             $.ajax({
                type: "POST",
                url: "php/procesar-estados.php",
                data: { estados : "Mexico" } 
                }).done(function(data){
                    $("#estado").html(data);
                    //alert(data);
            });
            

    
        
        }


 
// Obtener municipios
            function getval(sel)
            {
                //var estado = $("#jmr_contacto_estado option:selected").val();
                //alert(sel.value);

                var estado = sel.value;
                
                $.ajax({
                    type: "POST",
                    url: "php/procesar-estados.php",
                    data: { municipios : estado } 
                }).done(function(data){
                    $("#municipio").html(data);
                });
            }


    

	
	</script>
	
</head><!--/head-->

<body>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-sm-offset-1">
					
				</div>

				<div class="col-sm-4">
                    <div class="signup-form"><!--sign up form-->
						<h2>Agrega tu dirección</h2>
						<form id="adress_form" method="POST" onsubmit="return false" >
                        <h6>Localidad</h6>
							<input name="pais" id="pais" type="text" placeholder="País" required readonly value="México">
                            <select style="margin-bottom: 5%" name="estado" id="estado" id="estado" required onchange="getval(this);">
                                <option>Selecciona tu estado</option>
                            </select>
                            <select style="margin-bottom: 5%" id="municipio" name="municipio" required>
                                <option>Selecciona tu municipio</option>
                            </select>
                            <input name="cp" id="cp" type="text" placeholder="Código Postal" required />
                        <h6>Dirección</h6>
                            <input name="colonia" id="colonia" type="text" placeholder="Colonia" required />
							<input name="calle" id="calle" type="text" placeholder="Calle" required />
                            <input name="numeroE" id="numeroE" type="text" placeholder="Número Exterior" required />
                            <input name="numeroI" id="numeroI" type="text" placeholder="Número Interior" />

							<button type="submit" class="btn btn-default">Agregar dirección</button>

                            


						</form>
					</div><!--/sign up form-->
				</div>

				<div class="col-sm-3">
				
				</div>

			</div>
		</div>
	</section><!--/form-->
	

	<?php
include_once 'footer/footer.php';
//include_once 'footer/footer.php';
?>

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>