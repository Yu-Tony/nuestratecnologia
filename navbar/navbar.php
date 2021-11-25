
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>



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

    $(document).ready()
    {
    
      getTypeAccount();
      
    }

    function getTypeAccount()
    {
        // validate jwt to verify access
        var jwt = getCookie('jwt');
        $.post("api/validate_token.php", JSON.stringify({ jwt:jwt })).done(function(result) {

            $( "#navbarLogin" ).hide();
		    $( "#navbarLogged" ).show();
 
         /* $fname = result.data.firstname; 
          $space = " ";
       
          $lname = result.data.lastname; 

          
          $("#UserNameLog").html($fname+$space+$lname);*/


        })

        // show login page on error
        .fail(function(result){
            $( "#navbarLogin" ).show();
		    $( "#navbarLogged" ).hide();
        });
    }



        // function to set cookie
        function setCookie(cname, cvalue, exdays) {
                var d = new Date();
                d.setTime(d.getTime() + (exdays*24*60*60*1000));
                var expires = "expires="+ d.toUTCString();
                document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            }

    // get or read cookie
    function getCookie(cname){
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i <ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' '){
                c = c.substring(1);
            }
    
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    
    function LogOut()
    {
      setCookie("jwt", "", 1);
      location.replace("index.php");
      console.log("logged out");
    }
    


</script>

<header id="header"><!--header-->

<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-md-4 clearfix">
                <div class="logo pull-left">
                    <a href="index.php"> <h2><span>Nuestra</span> Tecnología</h2></a>
                </div>
            
            </div>
            <div class="col-md-8 clearfix">
                <div class="shop-menu clearfix pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href=""><i class="fa fa-envelope"></i> Mensajes</a></li>
                        <li><a href="wishlist.php"><i class="fa fa-star"></i> Lista de deseos</a></li>
                        <li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                        <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Carrito</a></li>

                        <li id="navbarLogin"><a href="login.php"><i class="fa fa-lock"></i> Iniciar Sesión</a></li>

                        <li class="dropdown" id="navbarLogged" style="display: none;"><a href="#"><i class="fa fa-user"></i>Nombre de Usuario<i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                       
                                <li><a href="profile.php" class="active">Perfil</a></li> 
                  
                                <li><a style="visibility: hidden;" href="">Para el espacio</a></li> 
                         

                                <li><a href="#" onclick="LogOut()" class="active">Cerrar Sesión</a></li> 
                            </ul>
                        </li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div><!--/header-middle-->

<div class="header-bottom"><!--header-bottom-->
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        
                        
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">



                <div class="signup-form">	
					<form action="#">
                        <div class="col-sm-7 col-sm-offset-1" style="margin: 0px; padding:0px;">
                            <input type="text" placeholder="Buscar" style="margin=0px; padding=0px;"/>
                        </div>
     
                        <div class="col-sm-4" style="margin: 0px; padding:0px;">
                            <button type="submit"  class="btn btn-default"> <i class="fa fa-search"></i> </button>
                        </div>
					</form>
				</div>

                


            </div>
        </div>
    </div>
</div><!--/header-bottom-->
</header><!--/header-->