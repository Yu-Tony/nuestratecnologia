<?php
include_once 'navbar/navbar.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Carrito</title>

</head><!--/head-->

<body>
	

	<section id="cart_items">
		<div class="container">

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image"></td>
							<td class="description">Nombre del producto</td>
							<td class="opcion">Opción del producto</td>
							<td class="price">Precio por unidad</td>
							<td class="quantity">Cantidad</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/product-details/1.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Mouse</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_option">
								<select>
									<option>Opción 1 </option>
									<option>Bangladesh</option>
								
								</select>
							</td>
							<td class="cart_price">
								<p>$200</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$200</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>

						<tr>
							<td class="cart_product">
								<a href=""><img src="images/product-details/2.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Mouse</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_option">
								<select>
									<option>Opción 1 </option>
									<option>Bangladesh</option>
								
								</select>
							</td>
							<td class="cart_price">
								<p>$200</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$200</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/product-details/3.jpg" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Mouse</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_option">
								<select>
									<option>Opción 1 </option>
									<option>Bangladesh</option>
								
								</select>
							</td>
							<td class="cart_price">
								<p>$200</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$200</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="heading">
				<h3>Estimar costo</h3>
				<p>A continuación puedes ingresar cupones o tarjetas de regalo y estimar el costo junto con el envío</p>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<div class="chose_area">
						<ul class="user_option">
							
							<label>Usar cupon</label>

							<li style="margin-bottom:5%"><input type="text"><button>aplicar</button></li>
						
							<label>Usar tarjeta de regalo</label>

							<li style="margin-bottom:5%"><input type="text"><button>aplicar</button></li>

							<li style="margin-top:2%">
								<input type="checkbox">
								<label>Estimar envío e impuestos</label>
							</li>
						</ul>
						<ul class="user_info" style="margin:0px">
							<li class="single_field">
								<label>Estado:</label>
								<select>
									<option>Seleccionar </option>
									<option>Bangladesh</option>
									<option>UK</option>
									<option>India</option>
									<option>Pakistan</option>
									<option>Ucrane</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
								
							</li>
							<li class="single_field">
								<label>Municipio:</label>
								<select>
									<option>Seleccionar </option>
									<option>Dhaka</option>
									<option>London</option>
									<option>Dillih</option>
									<option>Lahore</option>
									<option>Alaska</option>
									<option>Canada</option>
									<option>Dubai</option>
								</select>
							
							</li>
							<li class="single_field zip-field">
								<label>Codigo postal:</label>
								<input type="text">
							</li>
						</ul>
						<a class="btn btn-default update" href="">Crear estimado</a>

					</div>
				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Sub total del carrito <span>$200</span></li>
							<li>Impuestos <span>$2</span></li>
							<li>Costo de envío <span>Free</span></li>
							<li>Total <span>$61</span></li>
						</ul>
							<a class="btn btn-default update" href="">Actualizar estimado</a>
							<a class="btn btn-default check_out" href="checkout.php">Ir a check out</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

	
	<?php include_once 'footer/footer.php';?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>