<?php 
include("../html/documenthead.html");
?> 
<?php
session_start();
class Database {
	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $database = "cacgarden";
	private $conn;
	
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
$db_handle = new Database();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["pro_quantity"])) {
			$productById = $db_handle->runQuery("SELECT * FROM products WHERE pro_id='" . $_GET["pro_id"] . "'");
			$itemArray = array($productById[0]["pro_id"]=>array('pro_name'=>$productById[0]["pro_name"], 'pro_id'=>$productById[0]["pro_id"], 'pro_quantity'=>$_POST["pro_quantity"], 'pro_price'=>$productById[0]["pro_price"], 'pro_image'=>$productById[0]["pro_image"]));
			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productById[0]["pro_id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productById[0]["pro_id"] == $k) {
								if(empty($_SESSION["cart_item"][$k]["pro_quantity"])) {
									$_SESSION["cart_item"][$k]["pro_quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["pro_quantity"] += $_POST["pro_quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["pro_id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<title>Cart</title>
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
						<h1>Cart</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="cart-section mt-150 mb-150">
		<div class="container">
		<?php
						if(isset($_SESSION["cart_item"])){
							$total_quantity = 0;
							$total_price = 0;
						?>
			<div class="row">
				<div class="col-lg-8 col-md-12">
					<div class="cart-table-wrap">

						<table class="cart-table">
							<thead class="cart-table-head">
								<tr class="table-head-row">
									<th class="product-remove"></th>
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
							<?php		
								foreach ($_SESSION["cart_item"] as $item){
									$item_price = $item["pro_quantity"]*$item["pro_price"];
									?>
								<tr class="table-body-row">
									<td class="product-remove"><a href="pages/cart.php?action=remove&pro_id=<?php echo $item["pro_id"]; ?>"><i class="far fa-window-close"></i></a></td>
									<td class="product-image"><img src="<?php echo $item["pro_image"]; ?>" alt=""></td>
									<td class="product-name"><?php echo $item["pro_name"]; ?></td>
									<td class="product-price"><?php echo  number_format($item["pro_price"],0); ?> VND</td>
									<td class="product-quantity"><?php echo  number_format($item["pro_quantity"],0);?></td>
									<td class="product-total"><?php echo number_format($item_price,0); ?> VND</td>
								</tr>
								<?php
									$total_quantity += $item["pro_quantity"];
									$total_price += ($item["pro_price"]*$item["pro_quantity"]);
								}
								?>
							</tbody>
						</table>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="total-section">
						<table class="total-table">
							<thead class="total-table-head">
								<tr class="table-total-row">
									<th>Total</th>
									<th>Price</th>
								</tr>
							</thead>
							<tbody>
								<tr class="total-data">
									<td><strong>Subtotal: </strong></td>
									<td><?php echo number_format($total_price, 0); ?> VND</td>
								</tr>
								<tr class="total-data">
									<td><strong>Shipping: </strong></td>
									<td>
										<?php
											$ship=0;
											if($total_price>500000){
												echo number_format($ship,0);	
											}
											else{
												$ship=30000;
												echo number_format($ship,0);	
											};
										?> VND
									</td>
								</tr>
								<tr class="total-data">
									<td><strong>Total: </strong></td>
									<td>
										<?php
											$total=$total_price+$ship;
											echo number_format($total,0);
										?> VND
									</td>
								</tr>
							</tbody>
						</table>
						<div class="cart-buttons">
							<a href="pages/cart.php?action=empty" class="boxed-btn">Empty Cart</a>
							<a href="pages/checkout.php" class="boxed-btn black">Check Out</a>
						</div>
					</div>

					<div class="coupon-section">
						<?php
							$contribute = $total_price *0.1;
						?>
						<h3>You have contributed <?php echo number_format($contribute,0); ?> VND for community</h3>
					</div>
				</div>
			</div>
			<?php
			} else {
			?>
			<h2>Your Cart is Empty</h2>
			<?php 
			}
			?>
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