<?php 
include_once("../data/data.php");
?>
<?php
    class Product1{
        public function GetProduct(){
            $product_id = $_GET['pro_id'];
            $sql = "SELECT * FROM products where pro_id='$product_id' " ;
            $db = new Database();
            $result= $db->select($sql); 
            return $result;
        }
    }
?>

<?php
    class Product2{
        public function ShowProduct(){
            $p1 = new Product1();
            $result = $p1->GetProduct();
            while ($row = mysqli_fetch_array($result)){
                $product1 = <<<DELIMITER
                    <div class="row">
                        <div class="col-md-5">
                            <div class="single-product-img">
                                <img src={$row['pro_image']} alt="">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="single-product-content">
                                <h3>{$row['pro_name']}</h3>
                                <p class="single-product-pricing"><span>Per {$row['pro_count']}</span> {$row['pro_price']} VND</p>
                                <p>{$row['pro_detail']}</p>
                                <div class="single-product-form">
                                    <form action="pages/cart.php?action=add&pro_id={$row['pro_id']}" method="post">
                                    <input type="number" placeholder="0" name="pro_quantity" ><br>
                                    <input type="submit" value= "Add to Cart" class="cart-btn"<i class="fas fa-shopping-cart"></i>
                                    </form>
            
                                </div>
                                <h4>Share:</h4>
                                <ul class="product-share">
                                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href=""><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                DELIMITER;
                echo $product1;
            }
        }
    }
?>