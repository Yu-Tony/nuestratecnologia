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
    <title>Checkout</title>

</head><!--/head-->

<body>


	<section id="cart_items">
		<div class="container">

			<div class="step-one">
				<h2 class="heading">Información del comprador</h2>
			</div>

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Datos personales</p>
							<form>
								<input type="text" placeholder="Nombre">
								<input type="text" placeholder="Apellido">
								<input type="number" placeholder="Número de telefono">
								<input type="text" placeholder="Fecha de nacimiento">
								<input type="email" placeholder="Correo">
								<input type="password" placeholder="Contraseña">
								<input type="password" placeholder="Confirmar contraseña">
							</form>
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Datos personales</p>
							<form>
							<input type="text" placeholder="Pais">
									<select style="margin-bottom:5%">
										<option>-- Estado --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>

									<select style="margin-bottom:5%">
										<option>-- Municipio --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									
									<input type="text" placeholder="Colonia">
									<input type="password" placeholder="Calle">
									<input type="number" placeholder="Número Exterior">
									<input type="number" placeholder="Número Interior">
							</form>
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Método de pago</p>
							<form>
							
								<select style="margin-bottom:5%">
									<option>-- Método de pago --</option>
									<option>Tarjeta</option>
									<option>PayPal</option>
									<option>Personal</option>
								</select>

							
								<p>Método de envío</p>
								
								<select style="margin-bottom:5%">
									<option>-- Método de envío --</option>
									<option>Pick-Up</option>
									<option>Estandar</option>
									<option>Express</option>
								</select>
							</form>
							
						</div>
					</div>

					<div class="col-sm-3">
						<div class="order-message">
							<p>Notas</p>
							<textarea name="message"  placeholder="Notas sobre la orden, envío o empaquetado" rows="16"></textarea>
						</div>	
					</div>					
				</div>
			</div>
			<div class="step-one">
				<h2 class="heading">Productos comprados</h2>
			</div>


			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
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
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Cart Sub Total</td>
										<td>$200</td>
									</tr>
									<tr>
										<td>Exo Tax</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Shipping Cost</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="payment-options">

				<a style="margin: 0 auto; display: block;" class="btn btn-third" href="">Continuar</a>
			</div>

		</div>
	</section> <!--/#cart_items-->

	
	<?php include_once 'footer/footer.php';?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>