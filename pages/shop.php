<?php 
session_start();
include("../html/documenthead.html");
?> 
<title>Shop</title>
<body>


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
						<p>Fresh and Organic</p>
						<h1>Shop</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="C1" class="product-section mt-150 mb-150">
		<div class="container">

			<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                       <div  class="active">
					   <?php
							include('../scripts/displaycat.php');
							$cp = new CategoryP();
							$cp->ShowAllCategories();
						?>
						</div>
                    </div>
                </div>
            </div>

			<div class="row product-lists"  >
				<div class="col-lg-4 col-md-3 text-center cactus">
					<div class="products">
						<?php
							include('../scripts/displayprofromcat.php');
							$pp = new ProductP();
							$pp->ShowProductsByGroup();
						?>
					</div>
				</div>
			</div>

			
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<?php
								$bl = new CategoryP();
								$bl->BuildLinks();
							?>
						</ul>
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