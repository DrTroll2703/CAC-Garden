<?php 
session_start();
include("../html/documenthead.html");
?> 
<title>Sign up</title>
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

	
	

	<div class="breadcrumb-section breadcrumb-bg-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Create your account </p>
						<h1>Sign up</h1>
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
						<h2>Create your account</h2>
					</div>
				 	<div id="form_status"></div>
					<div class="signup-form">
						<form action="./scripts/signupprocess.php" method="post" id="signupform"
						onsubmit="return SignupValidate();">
							<?php
								$status= $_GET['status'];
								if($status!="")  echo "<script type='text/javascript'>alert('Email Already Exists!');</script>";
							?>
							<p>
								<input type="text" placeholder="Name" name="name" id="name">
								<input type="text" placeholder="Gender: Male/Female" name="gender" id="gender">
							</p>
							<p>
								<input type="text" placeholder="Login Name" name="loginname" id="loginname">
								<input type="password" placeholder="Login Password" name="loginpassword" id="loginpassword">
							</p>
							<p>
								<input type="tel" placeholder="Phone" name="phone" id="phone" maxlength='10'>
								<input type="email" placeholder="Email: @gmail	" name="email" id="email">
							</p>
							<p>
								<input type="text" placeholder="Address" name="address" id="address">
								<input type="tel" placeholder="Postal Code" name="postalcode" id="postalcode">
							</p>
							
							<p><input type="submit" value="Sign up"></p>
						</form>
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