<?php 
session_start();
include("../html/documenthead.html");
?> 
<title>Log out</title>
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

	
	

	<div class="breadcrumb-section breadcrumb-bg-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>See you soon!</p>
						<h1>Log out</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="contact-from-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 mb-5 mb-lg-0">
					<div class="form-title">
						<h2>See you, <?php echo $_SESSION["name"]; ?>!</h2>
						<p>If you want to log out please <a href="scripts/logoutprocess.php">click here</a></p>
					</div>	
				</div>
			</div>
		</div>
	</div>




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
	<script src="assets/js/form-validate.js"></script>
	<script src="assets/js/main.js"></script>
	
</body>
</html>