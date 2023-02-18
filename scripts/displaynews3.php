<?php 
include_once("../data/data.php");
?>
<?php
    class News2{
        public function GetNews(){
            $sql = "SELECT * FROM news" ;
            $db = new Database();
            $result= $db->select($sql);  
            return $result;
        }
    }
?>

<?php
    class Newsrc{
        public function ShowNews(){
            $ns = new News2();
            $result = $ns->GetNews();
            while ($row = mysqli_fetch_array($result)){
            $news = <<<DELIMITER
                        <ul>
                        <li><a href="pages/singlenews.php?news_id={$row['news_id']}">{$row['news_title']}</a></li>
                        </ul>
            DELIMITER;
            echo $news;
            }
        }
    }
?>
