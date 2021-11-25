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

	<script>

		$(function() {
		$('[data-toggle="tooltip"]').tooltip()
		})


		window.setTimeout(function(){

			$('#yearpicker').html('<option value="">Seleccionar un año</option>');
			var html = '';
			for (var i =new Date().getFullYear(); i <= 2040; i++) {
				html += '<option value="' + i + '">' + i + '</option>';
			}
			$('#yearpicker').append(html);
		}, 600);

	</script>

<script src="https://www.paypal.com/sdk/js?client-id=AXzXMA6dPo-ziWAA-D7i-6ON8yxv5j0chRAwEISbmc2dVwWESiFkZdhsrDzRjcRBj-oYQCflacN0Qjyx&currency=MXN"></script>


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
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
	
									<tr>
										<td>Sub total del carrito</td>
										<td>$200</td>
									</tr>
									<tr>
										<td>Impuestos</td>
										<td>$2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Costo de envío </td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$202</span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="payment-options">
				<button type="button" class="btn btn-third btnCurso btnComprar" style="margin: 0 auto; display: block;" data-toggle="modal" data-target="#ModalPay" >Continuar</button>

	
			</div>

		</div>
	</section> <!--/#cart_items-->

	
	<?php include_once 'footer/footer.php';?>

	    <!--Modal Pay-->
    <!--https://bbbootstrap.com/snippets/payment-form-three-different-payment-options-13285516 -->
    <div class="modal fade" id="ModalPay" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           
            <div class="modal-body" style="padding: 0px;" >
                <div class="card" style="color: black; margin: 0px;">
                    <div class="card-header">

                        <div class="bg-white shadow-sm pt-4 pl-2 pr-2 pb-2">
                            <!-- Credit card form tabs -->
                            <ul role="tablist" class="nav bg-light nav-pills rounded nav-fill mb-3">
                                <li class="nav-item"> <a data-toggle="pill" href="#credit-card" class="nav-link active "> <i class="fa fa-credit-card"></i> Tarjeta de credito</a> </li>
                                <li class="nav-item"> <a data-toggle="pill" href="#paypal" class="nav-link "> Paypal </a> </li>
                            </ul>
                        </div> <!-- End -->

                        <!-- Credit card form content -->
                        <div class="tab-content">
                            <!-- credit card info-->
                            <div id="credit-card" class="tab-pane fade show active pt-3">
                                <form role="form" style="padding: 2%;" id="CardPayment" onsubmit="event.preventDefault()">
                                    <div class="form-group"> 
                                        <label for="username">
                                            <h6>Nombre del titular</h6>
                                        </label> 
                                        <input type="text" pattern="[a-zA-Z]*" id="cardName" name="username" placeholder="Nombre del titular de la tarjeta" required class="form-control"  oninput="validateCardName();"> 
                                    </div>

                                    <div class="form-group"> 
                                        <label for="cardNumber">
                                            <h6>Numero de tarjeta</h6>
                                        </label>
                                        <div class="input-group"> 
                                            <input type="number" name="cardNumber" id="cardNumber" placeholder="Número de tarjeta valido" class="form-control" oninput="validateCardNumber();" required>
                                            <div class="input-group-append"> 
                                                <span class="input-group-text text-muted"> 
                                                    <i class="fab fa-cc-visa mx-1"></i> 
                                                    <i class="fab fa-cc-mastercard mx-1"></i>
                                                    <i class="fab fa-cc-amex mx-1"></i> 
                                                </span> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="form-group"> <label><span class="hidden-xs">
                                                        <h6>fecha de expiración</h6>
                                                    </span></label>
                                                <div class="input-group"> 
                                                    <select required>
                                                        <option value="">Selecciona un mes</option>
                                                        <option value="01">Enero</option>
                                                        <option value="02">Febrero </option>
                                                        <option value="03">Marzo</option>
                                                        <option value="04">Abril</option>
                                                        <option value="05">Mayo</option>
                                                        <option value="06">Junio</option>
                                                        <option value="07">Julio</option>
                                                        <option value="08">Agosto</option>
                                                        <option value="09">Septiembre</option>
                                                        <option value="10">Octubre</option>
                                                        <option value="11">Noviembre</option>
                                                        <option value="12">Diciembre</option>
                                                    </select>
    
                                                    <select required name="yearpicker" id="yearpicker"></select>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-4">
                                            <div class="form-group mb-4"> <label data-toggle="tooltip" title="Los 3 dígitos atrás de tu tarjeta">
                                                    <h6>Codigo de seguridad <i class="fa fa-question-circle d-inline"></i></h6>
                                                </label> <input id="CVV"  maxlength="3" pattern="\d{3}" type="password" placeholder="3 dígitos" required class="form-control" oninput="validateCardCVV();"> </div>
                                        </div>
                                        
                                    </div>
                                    <div id="ResultPayment" style="backgrund-color: rgb(119,221,119);"></div>
                                    <div class="card-footer"> 
                                        <button type="submit" class="subscribe btn btn-primary btn-block shadow-sm"> Confirmar Pago </button>
                                </form>
                            </div>
                            <!-- End -->
                        </div> 


                        <!-- Paypal info -->
                        <div id="paypal" class="tab-pane fade pt-3">

                            <div id="paypal-payment-button"></div>
                            <p class="text-muted"> Note: After clicking on the button, you will be directed to a secure gateway for payment. After completing the payment process, you will be redirected back to the website to view details of your order. </p>
                        </div> <!-- End -->

                        <!-- End -->
                    </div>
                </div>
           </div>



        </div>
    </div>

	<script src="js/payment.js"></script>
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>



</body>
</html>