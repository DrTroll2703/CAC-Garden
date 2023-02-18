<?php include("../html/documenthead.html"); ?>
<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
		$con = mysqli_connect('127.0.0.1:3306','root','','cacgarden') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM customers WHERE cus_login='" . $_POST["username"] . "' and cus_password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['cus_id'];
        $_SESSION["name"] = $row['cus_name'];
        } else {
         $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:../index.php");
	
    }
?>
<title>Sign in</title>
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



	<div class="breadcrumb-section breadcrumb-bg-about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Join with us</p>
						<h1>Sign in</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="login">
                <div class="login-form">
                    <form action="" method="POST">
					<div class="message"><?php if($message!="")  echo "<script type='text/javascript'>alert('$message');</script>"  ?></div>
					<span>Username:</span><br>
                    <input type="text" class="username" name="username" value="" maxlength="20"><br>
                    <span>Password:</span><br>
                    <input type="password" class="password" name="password" value="">
                        <input type="submit" class="login-button" name="login" value="Sign in">
                        <p>Need an account? <a href='pages/signup.php?status=' title='Sign up'>Sign up</a></p> 
                    </form>
                    
                    <h4>Login with social networks:</h4>    
                    <ul class="icon-login">
                        <li><i class="fab fa-facebook" aria-hidden="true"></i></li>
                        <li><i class="fab fa-google" aria-hidden="true"></i></li>
                        <li><i class="fab fa-twitter" aria-hidden="true"></i></li>
                    </ul>
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