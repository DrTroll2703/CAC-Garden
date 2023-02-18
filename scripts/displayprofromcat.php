<?php include_once("../data/data.php"); ?>
<?php
    class ProductB{
        public function GetAllProductsFromCategory($cat_id){
            $sql = "SELECT * FROM products where cat_id ={$cat_id}";
            $db = new Database();
            $result= $db->select($sql);
            return $result;
        }
    }
?>

<?php
    class ProductP{
        public function ShowProduct($id, $img, $name, $count, $price){
            $product = <<<DELIMITER
                    <div class="single-product-item" >
                        <div class="product-image">
                        <a href="pages/singleproduct.php?pro_id=$id"><img src=$img alt=""></a>
                        </div>
                        <h3>$name</h3>
                        <p class="product-price"><span>Per $count</span> $price VND </p>
                        <form action="pages/cart.php?action=add&pro_id=$id" method="post">
                        <input type="hidden" name="pro_quantity" value="1">
                        <input type="submit" value= "Add to Cart" class="cart-btn"<i class="fas fa-shopping-cart"></i>
                        </form>
                    </div>
                DELIMITER;
                echo $product;
        }

        public function ShowProductsInCategory(){
            $pb = new ProductB();
            $cp = new CategoryP();
            $cat_id = $cp->GetCategory();
            $result = $pb->GetAllProductsFromCategory($cat_id);
            while ($row = mysqli_fetch_array($result)){
                $this->ShowProduct($row['pro_id'], $row['pro_image'], $row['pro_name'], $row['pro_count'], $row['pro_price']);
            }
        }

        public function ShowProductsByGroup(){
            $cp = new CategoryP();
            $cat_id = $cp->GetCategory();
            $page_id = $cp->GetPage();
            $cb = new CategoryB();
            $result = $cb->GetProductsInGroup($cat_id, $page_id);
            while ($row = mysqli_fetch_array($result)){
                $this->ShowProduct($row['pro_id'], $row['pro_image'], $row['pro_name'], $row['pro_count'], $row['pro_price']);
            }
        }
    }
?>