<?php include_once("../data/data.php"); ?>
<?php
    class CategoryB{
        private $cat_list=null;
        private $MAX_PRODUCT = 3;
        public function GetAllCategories(){
          if($this->cat_list == null){
            $sql = "SELECT * FROM categories";
            $db = new Database();
            $this->cat_list= $db->select($sql);
          }  
            return $this->cat_list;
        }

        public function GetAmountOfProductInCategory($cat_id){
            $sql = "SELECT COUNT(*) as NUM FROM products WHERE cat_id={$cat_id}";
            $db = new Database();
            $result= $db->select($sql);
            $row = mysqli_fetch_array($result);
            $num = $row['NUM'];
            return $num;
        }

        public function CalculateNumberOfLinks($cat_id){
            $num = $this->GetAmountOfProductInCategory($cat_id);
            $max = $this->MAX_PRODUCT;
            $result = (float)$num/$max;
            $result= ceil($result);
            return $result;
        }

        public function GetProductsInGroup($cat_id, $link_num){
            $offset= ($link_num-1)*$this->MAX_PRODUCT;
            $sql ="SELECT * FROM products WHERE cat_id={$cat_id} LIMIT {$offset},{$this->MAX_PRODUCT}";
            $db = new Database();
            $result= $db->select($sql);
            return $result;
        }
    }
?>

<?php
    class CategoryP{
        public function ShowAllCategories(){
            $cb = new CategoryB();
            $result = $cb->GetAllCategories();
            $count1 = 1;
            while ($row = mysqli_fetch_array($result)){
                $category = <<<DELIMITER
                        <ul>
                        <a href="../CACGarden/pages/shop.php?category={$count1}&page=1#C1"{$this->SetClassForCurrentCategory($count1)}><li>{$row['cat_name']}</li></a>
                        </ul>
                DELIMITER;
                echo $category;
                $count1 ++;
            }
        }

        public function SetClassForCurrentCategory($count1){
            $cat_id = $this->GetCategory();
            $class = "";
            if($count1==$cat_id)
                $class= "class='active'";
            return $class;
        }

        public function BuildLinks(){
            $cb = new CategoryB();
            $cat_id=$this->GetCategory();
            $num = $cb->CalculateNumberOfLinks($cat_id);
            $count=1;
            while ($count<=$num){
                $link = <<<DELIMITER
                    <li><a href="pages/shop.php?category={$cat_id}&page={$count}#C1" {$this->SetClassForCurrentPage($count)}>{$count}</a></li>
                DELIMITER;
                echo $link;
                $count ++;
            }
        }

        public function SetClassForCurrentPage($count){
            $page_id = $this->GetPage();
            $class = "";
            if($count==$page_id)
                $class= "class='active'";
            return $class;
        }

        public function GetPage(){
            $page_id;
            if (!isset($_GET['page']))
                $page_id = 1;
            else
                $page_id = $_GET['page'];
            return $page_id;
        }

        public function GetCategory(){
            $cat_id;
            if (!isset($_GET['category']))
                $cat_id = 1;
            else
                $cat_id = $_GET['category'];
            return $cat_id;
        }
    }
?>


