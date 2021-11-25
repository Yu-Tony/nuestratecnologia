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

<!--https://harvesthq.github.io/chosen/-->
  <link rel="stylesheet" href="chosen/docsupport/prism.css">
  <link rel="stylesheet" href="chosen/chosen.css">



	<script src="js/loginValidation.js"></script>

    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip();
        })

//https://stackoverflow.com/questions/18635817/input-field-that-creates-tags
        jQuery(function($) {

            $('#tags input').on('focusout', function() {
            var txt = this.value.replace(/[^a-zA-Z0-9\+\-\.\#]/g, ''); // allowed characters list
            if (txt) $(this).before('<span class="tag">' + txt + '</span>');
            this.value = "";
            this.focus();
            }).on('keyup', function(e) {
            // comma|enter (add more keyCodes delimited with | pipe)
            if (/(188|13)/.test(e.which)) $(this).trigger('focusout');
            });

            $('#tags').on('click', '.tag', function() {
            if (confirm("¿Eliminar esta opción?")) $(this).remove();
            });

        });


    </script>


</head><!--/head-->

<body>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-1 col-sm-offset-1">
					
				</div>

				<div class="col-sm-8">
                    <div class="signup-form" style="margin-right:20%; margin-left:20%"><!--sign up form-->
						<h2>Crea un nuevo producto</h2>
						<form id="create_form" method="POST" onsubmit="return false" >
                            <!--
                                Cantidad, nombre, precio, descripcion, miniatura, marca, categoria, opcion
                            -->
                            
                            <h5>Información principal<span style="color:red;">*</span></h5>
							<input name="nombreProducto" id="nombreProducto" type="text" placeholder="Nombre del Producto" data-toggle="tooltip" data-placement="right" title="Escribir el nombre del producto. Puede incluir cualquier tipo de caracter." required>
							
                            <input name="cantidadProducto" id="cantidadProducto" type="number" placeholder="Cantidad del Producto" data-toggle="tooltip" data-placement="right" title="Escribir la cantidad en existencia de este producto" required>

                            <input name="precioProducto" id="precioProducto" type="number" placeholder="Precio del Producto" data-toggle="tooltip" data-placement="right" title="Escribir el precio por unidad del producto" required>

                            <textarea style="margin-bottom:2%" id="descripcionProducto" name="descripcionProducto" placeholder="Descripción del Producto" data-toggle="tooltip" data-placement="right" title="Escribir una descripcion acerca del producto" required></textarea>
                            
                            <h5>Imagenes del producto<span style="color:red;">*</span></h5>
                            <input type="file" id="avatar" name="avatar" multiple="multiple" accept="image/png, image/jpeg" required data-toggle="tooltip" data-placement="right" title="Seleccionar una o multiples imagenes para mostrar en el producto" >


                            <h5>Marca<span style="color:red;">*</span></h5>
                            <select data-placeholder="Escribe para comenzar a filtrar" class="chosen-select" style="margin-bottom: 5%" name="marcaProducto" id="marcaProducto" required data-toggle="tooltip" data-placement="right" title="Seleccionar una marca para el producto.">
                                <option value=""></option>
                                <option>American Black Bear</option>
                                <option>Asiatic Black Bear</option>
                                <option>Brown Bear</option>
                                <option>Giant Panda</option>
                                <option>Sloth Bear</option>
                                <option>Sun Bear</option>
                                <option>Polar Bear</option>
                                <option>Spectacled Bear</option>
                            </select>



                            <h6 class="col-12">¿No encuentras la marca de tu producto?<a href="#crearMarca_form"> Crea una nueva </a></h6> 

                            <h5 style="margin-top:5%">Categoría<span style="color:red;">*</span></h5 required>
  
              

                            <select data-placeholder="Escribe para comenzar a filtrar" multiple class="chosen-select" name="test" data-toggle="tooltip" data-placement="right" title="Seleccionar una o varias categorías para el producto.">
                                <option value=""></option>
                                <option>American Black Bear</option>
                                <option>Asiatic Black Bear</option>
                                <option>Brown Bear</option>
                                <option>Giant Panda</option>
                                <option>Sloth Bear</option>
                                <option>Sun Bear</option>
                                <option>Polar Bear</option>
                                <option>Spectacled Bear</option>
                            </select>
                      
                    
                        


                            <h6 class="col-12">¿No encuentras una categoría para tu producto?<a href="#crearCategoria_form"> Crea una nueva </a></h6> 

                            <h5 style="margin-top:5%">Opción<span style="color:red;">*</span></h5>
                            <div  id="tags" data-toggle="tooltip" data-placement="right" title="Escribe una opción y luego presiona la tecla enter, tab o escribe una coma (,) para agregar la opción">
                                <!-- <span class="tag">Photoshop</span>-->
                                <input  class="col-12" type="text" value="" placeholder="Crea opciones para tu producto" />
                            </div>	

                            <input class="btn btn-primary btn-sm" type="submit" name="categoriaAdd" value="Agregar Producto" data-toggle="tooltip" data-placement="right" title="Click para crear el producto. Recuerda llenar todos los campos antes de dar click"/>


						</form>

                        <form  method="post"  id="crearMarca_form" style="padding:3%">           
                            <div class="card"> 

                                <div class="form-group row">
                                
                                    <h2>Agregar Marca</h2>

                                    <h5 style="margin-top:5%">Nombre de la marca<span style="color:red;">*</span></h5>
                
                                    <input id="CategoryName" name="CategoryName" class="form-control here" required type="text">
  
                                    <input class="btn btn-primary btn-sm" type="submit" name="categoriaAdd" value="Agregar marca" data-toggle="tooltip" data-placement="right" title="Click para crear una nueva marca"/>

                            
                                </div>

                            </div>
                        </form>

                        <form  method="post"  id="crearCategoria_form" style="padding:3%">           
                            <div class="card" > 

                                <div class="form-group row">
                                
                                    <h2>Agregar Categoría</h2>
                                    <h5 style="margin-top:5%">Nombre de la categoría<span style="color:red;">*</span></h5>
                           
                                    <input id="CategoryName" name="CategoryName" class="form-control here" required type="text">
                                
                                    <input class="btn btn-primary btn-sm" type="submit" name="Categoria" value="Agregar categoría" data-toggle="tooltip" data-placement="right" title="Click para crear una nueva categoria"/>

                            
                                </div>

                            </div>
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

  
  <script src="chosen/chosen.jquery.js" type="text/javascript"></script>
  <script src="chosen/docsupport/prism.js" type="text/javascript" charset="utf-8"></script>
  <script src="chosen/docsupport/init.js" type="text/javascript" charset="utf-8"></script>

</body>
</html>
