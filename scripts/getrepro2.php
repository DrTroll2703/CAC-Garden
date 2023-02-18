<?php 
include_once("../data/data.php");
?>
<?php
    class ProductF{
        public function GetProductF(){
            $sql = "SELECT * FROM products where pro_feature='1' " ;
            $db = new Database();
            $result= $db->select($sql);  
            return $result;
        }
    }
?>

<?php
    class ProductFeatured{
        public function ShowProductFeatured(){
            $p2 = new ProductF();
            $result = $p2->GetProductF();
            while ($row = mysqli_fetch_array($result)){
                $product1 = <<<DELIMITER
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="pages/singleproduct.php?pro_id={$row['pro_id']}"><img src={$row['pro_image']} alt=""></a>
                    </div>
                    <h3>{$row['pro_name']}</h3>
                    <p class="product-price"><span>Per {$row['pro_count']}</span> {$row['pro_price']} VND </p>
                    <form action="pages/cart.php?action=add&pro_id={$row['pro_id']}" method="post">
                        <input type="hidden" name="pro_quantity" value="1">
                        <input type="submit" value= "Add to Cart" class="cart-btn"<i class="fas fa-shopping-cart"></i>
                        </form>
                </div>
                DELIMITER;
                echo $product1;
            }
        }
    }
?>
