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
    <title>Iniciar Sesión</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

	<script src="js/loginValidation.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">


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
			url: "api/create_user.php",
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

	/*--------------------------------------------------LOGIN--------------------------------------*/
	// trigger when login form is submitted
	$(document).on('submit', '#login_form', function()
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
		var login_form=$(this);
		var form_data=JSON.stringify(login_form.serializeObject());

		
		// submit form data to api
		$.ajax({
			url: "api/login.php",
			type : "POST",
			contentType : 'application/json',
			data : form_data,
			success : function(result){
	
				// store jwt to cookie
				setCookie("jwt", result.jwt, 10);
				console.log("sucess");
			
				$( "#navbarLogin" ).hide();
				$( "#navbarLogged" ).show();
				login_form.find('input').val('');
				window.location = 'index.php';

				
			
			},
			error: function(xhr, resp, text){
			console.log("fail");
				// on error, tell the user login has failed & empty the input boxes
				console.log("Error al iniciar sesion " + text);
				console.log("Response text  " + xhr.responseText);
	

				$('#response-log').html("<div class='alert alert-danger'>Login failed. Email or password is incorrect.</div>");
				login_form.find('input').val('');
			}
		});



		return false;
	});

	

	
	</script>
	
</head><!--/head-->

<body>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Entra a tu cuenta</h2>
						<form id="login_form" method="POST" onsubmit="return false" >
							<input name="email" type="email" placeholder="Correo Electrónico" />
							<input name="password" type="password" placeholder="Contraseña" />
							
							<button type="submit" class="btn btn-default">Iniciar Sesión</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">O</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Si eres nuevo usuario registrate</h2>
						<form id="sign_up_form" method="POST" onsubmit="return false" >
							<input name="nombre" id="nombreLogin" type="text" placeholder="Nombre" required oninput="validateFName();"/>
							<input name="apellido" id="apellidoLogin" type="text" placeholder="Apellido" required oninput="validateLName();"/>
							<input name="email" id="emailLogin" type="email" placeholder="Correo Electrónico" required oninput="validateMail();"/>
							<input name="password" id="passwordLogin" type="password" placeholder="Contraseña" required oninput="validatePassword();"/>
							<div class="media">
                                        <div class="form-group">
                            
                                        <select class="form-control" id="genero" name="genero" required>
                                        <option value="">Genero</option>
                                        <option value="1">Mujer</option>
                                        <option value="2">Hombre</option>
                                        <option value="3">No binario</option>
                                        <option value="4">Ninguno/Agénero</option>
                                        <option value="5">Prefiero no decir</option>
                                        </select>
                                    </div>
                                </div>
							<button type="submit" class="btn btn-default">Registrarse</button>
						</form>
					</div><!--/sign up form-->
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