<?php 
session_start();
include("html/documenthead.html");
?> 
<title>CAC Garden</title>
<body>
<?php
 include_once('html/preload.html');
?>
<header>
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
					<?php
						include('html/logo.html');
						include('html/menu.php');
					?>
					</div>
            	</div>
        	</div>
    	</div>
</div>    			
</header>
	


	<div class="homepage-slider">
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fresh & Organic</p>
								<h1>Welcome to <br> CAC Garden</h1>
								<div class="hero-btns">
									<a href="pages/shop.php" class="boxed-btn">Plant Collection</a>
									<a href="pages/contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Fresh Everyday</p>
								<h1>100% Organic Collection</h1>
								<div class="hero-btns">
									<a href="pages/shop.php" class="boxed-btn">Visit Shop</a>
									<a href="pages/contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Mega Sale Going On!</p>
								<h1>Get Earth Day Discount</h1>
								<div class="hero-btns">
									<a href="pages/shop.php" class="boxed-btn">Visit Shop</a>
									<a href="pages/contact.php" class="bordered-btn">Contact Us</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over 500.000VND</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> Products</h3>
						<p>CAC Garden specializes in providing interior plants, table plants with a particularly suitable habitat and very easy to set up and 100% eco-friendly.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 text-center">
					<div class="products">
						<?php
							include("scripts/getrepro1.php");
							$rp = new ProductFeatured();
							$rp ->ShowProductFeatured();
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per item
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/a.png" alt="">
                    </div>
                </div>
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Euphorbia Acrurensis Abyssinia</h4>
                    <div class="text">Hurry up! We only sell it for Earth Day every year and the event period is only within 3 days. Let's own it now to join hands to protect the environment. Time is counting down!!!</div>
                
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2022/4/9"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<form action="pages/cart.php?action=add&pro_id=2" method="post">
                        <input type="hidden" name="pro_quantity" value="1">
                        <input type="submit" value= "Add to Cart" class="cart-btn"></i>
                        </form>
                </div>
            </div>
        </div>
    </section>

	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Saira Hakim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									“Each tree of CAC Garden is a green cell of the community's lungs, supporting CAC Garden is that you have joined hands to develop the fund to create life for your own future”
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									“With the mission "Spread Happiness", we believe that when working with people who come from the sincerity and core values ​​of each member and customer”
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									“We believe that this is the best choice for you even if you are a busy person and rarely have time to take care of your plants. Now, you can feel nature "creeping" into every place you pass from your beloved home to your workplace”
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="assets/vid/video1.mp4" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Since year 2001</p>
						<h2>We are <span class="orange-text">CAC</span></h2>
						<p>Starting from nature lovers, we want to create values ​​that contribute to the community and society. Therefore, trees - a "product" that plays an especially important role for nature is chosen as our main product. With us, the product you buy is not only a tree but also the story behind it. We provide you with everything about the “tree” with all the convenient services. “You just sit there – we will come.”</p>
						<p>With our youth and always improving product quality day by day, we have been giving our customers green breaths, raising the level of quality of life.</p>
						<a href="pages/about.php" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="shop-banner">
    	<div class="container">
        	<h3>What you buy is... <br> <span class="orange-text"> a story</span></h3>
            <div class="sale-percent"><span>Contribute <br> Up to</span>10% <span>for community</span></div>
            <a href="pages/shop.php" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>

	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> News</h3>
						<p>Each news site brings unique values ​​that we dedicated to you. Read it and enjoy it because you deserve it.</p>
					</div>
				</div>
			</div>

			<div class="row" style="width:205%">
				<div class="col-lg-4 col-md-6" style="column-count:2" style="display:inline-block">
					<?php
						include('scripts/displaynews1.php');
						$np= new News();
						$np->ShowNews();
					?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="pages/news.php" class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>


	<?php
		include('html/logos.html');
	?>

<footer>
	<?php
		include('html/footer.html');
		include('html/copy.html');
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