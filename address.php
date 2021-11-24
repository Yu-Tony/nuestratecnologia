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

	var estado = 0;
	var municipio = 0;
	var editNumber = 0;
	var idAccount = 0;

    $(document).ready()
    {

		getUserAdress();

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


	function getUserAdress(){
    	// validate jwt to verify access
    	var jwt = getCookie('jwt');
    	$.post("api/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {
		
    	    idAccount = result.data.id;
		
    	    $.ajax({
    	    url: "php/getAddress.php",
    	    type : "POST",
    	    data: {'idUser': idAccount,'function': 2}, 
    	    success : function(result) {

    	        //alert(result);
    	        $("#adress_form").html(result);  

				 estado = $(".getEstado").html();
				 municipio = $(".getMunicipio").html();
				 editNumber = $(".editNumber").val();
				 

    	        },
    	        error: function(xhr, resp, text){
    	            // on error, tell the user sign up failed

    	            console.log("Error al traer   " + text);
    	            console.log("Response text  " + xhr.responseText);

    	        }
    	    });
		
    	})
	
    	// on error/fail, tell the user he needs to login to show the account page
    	.fail(function(result){});
    }

	// trigger when login form is submitted
	$(document).on('submit', '#adress_form', function()
	{
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
		var adress_form=$(this);
		
		var adress_form_data=JSON.stringify(adress_form.serializeObject());
	
		var myJsonObject = JSON.parse(adress_form_data); //change to obj
		myJsonObject.idUser = idAccount; //add something
		adress_form_data = JSON.stringify(myJsonObject); //change back to string
	
		if(editNumber==0)
		{
			//alert("no hay nada, pero" + adress_form_data );
			
			$.ajax({
				url: "php/setAddress.php",
				type : "POST",
				contentType : 'application/json',
				data : adress_form_data,
				success : function(result){
				console.log(result);
			
				},
				error: function(xhr, resp, text){
				console.log("fail");
					// on error, tell the user login has failed & empty the input boxes
					console.log("Error al iniciar sesion " + text);
					console.log("Response text  " + xhr.responseText);
				}
			});
		}
		else
		{
			//alert("si hay algo" + adress_form_data );
			$.ajax({
				url: "php/editAddress.php",
				type : "POST",
				contentType : 'application/json',
				data : adress_form_data,
				success : function(result){
					
				console.log(result);
			
				},
				error: function(xhr, resp, text){
				console.log("fail");
					// on error, tell the user login has failed & empty the input boxes
					console.log("Error al iniciar sesion " + text);
					console.log("Response text  " + xhr.responseText);
				}
			});
		}
		/*

		// get form data
		

		var myJsonObject = JSON.parse(form_data); //change to obj
		myJsonObject.somethingnew = true; //add something
		form_data = JSON.stringify(myJsonObject); //change back to string

		
		// submit form data to api




		return false;*/
	});


	window.setTimeout(function(){   
		//https://jonathanmelgoza.com/blog/select-dinamico-de-estados-y-municipios-con-jquery-y-php/
		$.ajax({
            type: "POST",
            url: "php/procesar-estados.php",
            data: { estados : "Mexico" } 
            }).done(function(data){
                $("#estado").html(data);

				$("#estado").val(estado).change();
				
                //alert(data);
        });



      }, 600);

	  window.setTimeout(function(){   
	
		$("#municipio").val(municipio).change();


      }, 1000);


	 


	
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
