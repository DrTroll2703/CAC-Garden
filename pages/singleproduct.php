<?php 
session_start();
include("../html/documenthead.html");
?> 
<title>Single Product</title>
<body>
<?php
 include_once('../html/preload.html');
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

	

	<div class="breadcrumb-section breadcrumb-bg-shop">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See more Details</p>
						<h1>Single Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<?php
				include('../scripts/getsinglepro.php');
				$sp1 = new Product2();
				$sp1->ShowProduct();
			?>
		</div>
	</div>

	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>In addition to the main products, we also have other products that you may need. Please visit when you have time.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
				<div class="products">
					<?php
					 	include("../scripts/getrepro2.php");
						$rp = new ProductFeatured();
						$rp ->ShowProductFeatured();
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