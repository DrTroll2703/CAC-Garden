<?php 
include_once("../data/data.php");
?>
<?php
    class News1{
        public function GetNews(){
            $news_id = $_GET['news_id'];
            $sql = "SELECT * FROM news where news_id='$news_id' " ;
            $db = new Database();
            $result= $db->select($sql); 
            return $result;
        }
    }
?>

<?php
    class News{
        public function ShowNews(){
            $ns1 = new News1();
            $result = $ns1->GetNews();
            while ($row = mysqli_fetch_array($result)){
                $new1 = <<<DELIMITER
                <div class="single-article-text">
                <div class="single-artcile-bg{$row['news_id']}"></div>
                <p class="blog-meta">
                    <span class="author"><i class="fas fa-user"></i> {$row['news_post']}</span>
                    <span class="date"><i class="fas fa-calendar"></i> {$row['news_day']}</span>
                </p>
                <h2>{$row['news_title']}</h2>
                <p>{$row['news_content']}</p>
                </div>
                DELIMITER;
                echo $new1;
            }
        }
    }
?>