<?php 
session_start();
include("../html/documenthead.html");
?> 
<title>Check Out</title>
<body>
	<?php
		include('../html/preload.html');
	?>

<header>
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
					<?php
						include('../html/logo.html');
						include('../html/menu.php');
					?>
					</div>
            	</div>
        	</div>
    	</div>
</div>				
</header>


	

	<div class="breadcrumb-section breadcrumb-bg-cart">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="checkout-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="checkout-accordion-wrap">
						<div class="accordion" id="accordionExample">
						  <div class="card single-accordion">
						    <div class="card-header" id="headingOne">
						      <h5 class="mb-0">
						        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						          Shipping Address
						        </button>
						      </h5>
						    </div>

						    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						      <div class="card-body">
						        <div class="shipping-address-form">
						        	<form>
						        		<p><input type="text" placeholder="Name"></p>
						        		<p><input type="email" placeholder="Email"></p>
						        		<p><input type="text" placeholder="Address"></p>
						        		<p><input type="tel" placeholder="Phone"></p>
						        		<p><textarea name="bill" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
						        	</form>
						        </div>
						      </div>
						    </div>
						  </div>
						</div>

					</div>
					
				</div>

				<div class="col-lg-4">
					<div class="order-details-wrap">
					<?php
						if(isset($_SESSION["cart_item"])){
							$total_quantity = 0;
							$total_price = 0;
						?>
						<table class="order-details">
							<thead>
								<tr>
									<th>Payment: Cash on delivery</th>
									<th></th>
								</tr>
								<tr>
									<th>Your order Details</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody class="order-details-body">
								<tr>
									<td>Product</td>
									<td>Total</td>
								</tr>
								<?php		
								foreach ($_SESSION["cart_item"] as $item){
									$item_price = $item["pro_quantity"]*$item["pro_price"];
									?>
								<tr>
									<td><?php echo $item["pro_name"]; ?></td>
									<td><?php echo number_format($item_price,0); ?> VND</td>
								</tr>
								<?php
									$total_price += $item_price;
								}
								?>
							</tbody>
							<tbody class="checkout-details">
								<tr>
									<td>Subtotal</td>
									<td><?php echo number_format($total_price, 0); ?> VND</td>
								</tr>
								<tr>
									<td>Shipping</td>
									<td><?php
											$ship=0;
											if($total_price>500000){
												echo number_format($ship,0);	
											}
											else{
												$ship=30000;
												echo number_format($ship,0);	
											};
										?> VND</td>
								</tr>
								<tr>
									<td>Total</td>
									<td><?php
											$total=$total_price+$ship;
											echo number_format($total,0);
										?> VND</td>
								</tr>
							</tbody>
						</table>
						<a href="pages/thanks.php" class="boxed-btn">Place Order</a><br>
						<?php 
						} 
						unset($_SESSION['cart_item']);
						?>	
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<?php
		include('../html/logos.html');
	?>

<footer>
	<?php
		include('../html/footer.html');
		include('../html/copy.html');
	?>
</footer>
	
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.countdown.js"></script>
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<script src="assets/js/waypoints.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<script src="assets/js/sticker.js"></script>
	<script src="assets/js/main.js"></script>

</body>
</html>