<?php 
include_once("../data/data.php");
?>
<?php
    class News1{
        public function GetNews(){
            $sql = "SELECT * FROM news" ;
            $db = new Database();
            $result= $db->select($sql);  
            return $result;
        }
    }
?>

<?php
    class News{
        public function ShowNews(){
            $ns = new News1();
            $result = $ns->GetNews();
            while ($row = mysqli_fetch_array($result)){
                $news = <<<DELIMITER
                <div class="single-latest-news">
                <a href="pages/singlenews.php?news_id={$row['news_id']}"><div class="latest-news-bg news-bg-{$row['news_id']}"></div></a>
                <div class="news-text-box">
                    <h3><a href="pages/singlenews.php?news_id={$row['news_id']}">{$row['news_title']}</a></h3>
                    <p class="blog-meta">
                        <span class="author"><i class="fas fa-user"></i> {$row['news_post']}</span>
                        <span class="date"><i class="fas fa-calendar"></i> {$row['news_day']}</span>
                    </p>
                    <p class="excerpt">{$row['news_pre']}
                    </p>
                    <a href="pages/singlenews.php?news_id={$row['news_id']}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                </div>
                </div>
                DELIMITER;
                echo $news;
            }
        }
    }
?>
