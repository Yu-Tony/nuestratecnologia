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
    <title>Lista de deseos</title>

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
							<td class="price"></td>
							<td class="quantity"></td>
							<td class="total">Precio por unidad</td>
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
								
							</td>
							<td class="cart_quantity">
								
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
								
							</td>
							<td class="cart_quantity">
								
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
								
							</td>
							<td class="cart_quantity">
								
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

	
	<?php include_once 'footer/footer.php';?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>