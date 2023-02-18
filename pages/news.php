<?php 
session_start();
include("../html/documenthead.html");
?> 
<title>News</title>
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


	

	<div class="breadcrumb-section breadcrumb-bg-news">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Business Activities Information</p>
						<h1>News </h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="latest-news mt-150 mb-150">
		<div class="container">
			<div class="row" style="width:205%" >
				<div class="col-lg-4 col-md-6" style="column-count:2" style="display:inline-block">
					<?php
						include('../scripts/displaynews2.php');
						$np= new News();
						$np->ShowNews();
					?>
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