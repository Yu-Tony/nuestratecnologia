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
    <title>Detalles del producto</title>



</head><!--/head-->

<body>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php include_once 'sidebar/sidebar.php';?>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="images/product-details/1.jpg" alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img src="images/product-details/similar1.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar2.jpg" alt=""></a>
										  <a href=""><img src="images/product-details/similar3.jpg" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>Mouse</h2>
								<p>Web ID: 1089772</p>
								<p><b>Calificación:</b> <img src="images/product-details/rating.png" alt="" /></p>
								<p><b>Cantidad disponible:</b> 5</p>
								<p><b>Marca:</b> HP</p>
								<p><b>Categorias:</b> E-SHOPPER</p>

								<p>
									<b>Precio:</b> 	
									<span style="margin:0px;"><span style="margin:0px;">$200</span>
									</span>
				

								</p>
								
							
									
								<p style="margin: 0px">
									<b>Opciones:</b> 
									<select  name="marcaProducto" id="marcaProducto" required data-toggle="tooltip" data-placement="right" title="Seleccionar una opcion.">
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
								</p>

							

								<div class="row" style="margin: 4%">
									<div class="row">
										<label>Cantidad:</label>
									</div>
									<div class="row">
										<input type="number" style="background: #F0F0E9; border: medium none;" />
									</div>
								</div>

								<div class="row">
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Añadir al carrito
									</button>

									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-star"></i>
										Añadir a la lista de deseos
									</button>
								</div>
								
									
								

								

								
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Detalles</a></li>
						
								<li ><a href="#reviews" data-toggle="tab">Reseñas</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<div class="col-sm-12">
								Descripcion del producto
								</div>
				
							</div>
							

							<div class="tab-pane fade " id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><i class="fa fa-user"></i> EUGEN</li>
										<li><i class="fa fa-calendar-o"></i> 31 DEC 2014</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									
									<hr class="new1">

									<p><b>Escribe tu reseña</b></p>
									
									<form action="#">
									
										<textarea name="" ></textarea>
										<b>Calificación: </b> 
									
										<div class='rating-stars text-center'>
											<ul id='stars'>
												<li class='star' title='Poor' data-value='1'>
												<i class='fa fa-star fa-fw'></i>
												</li>
												<li class='star' title='Fair' data-value='2'>
												<i class='fa fa-star fa-fw'></i>
												</li>
												<li class='star' title='Good' data-value='3'>
												<i class='fa fa-star fa-fw'></i>
												</li>
												<li class='star' title='Excellent' data-value='4'>
												<i class='fa fa-star fa-fw'></i>
												</li>
												<li class='star' title='WOW!!!' data-value='5'>
												<i class='fa fa-star fa-fw'></i>
												</li>
											</ul>
                                        </div>

										<button type="button" class="btn btn-default pull-right">
											Enviar
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Productos Recomendados</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend1.jpg" alt="" />
													<h2>$56</h2>
													<p>Mouse</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend2.jpg" alt="" />
													<h2>$56</h2>
													<p>Mouse</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Mouse</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>

								</div>
								
									
							
							</div>
									
						</div>
					</div><!--/recommended_items-->
					
				</div>
			</div>
		</div>
	</section>
	
	<?php include_once 'footer/footer.php';?>
	 
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


</body>
</html>