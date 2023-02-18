<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="/CACGarden/">
</head>
<body>
    <nav class="main-menu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="pages/shop.php">Shop</a></li>
            <li><a href="pages/news.php">News</a></li>
            <li><a href="pages/contact.php">Contact</a></li>
            <li><a href="pages/about.php">About</a></li>
            <li>
                <div class="header-icons">
                    <?php
                        $num_items_in_cart = isset($_SESSION['cart_item']) ? count($_SESSION['cart_item']) : 0;
                    ?>
                    <a class="shopping-cart" href="pages/cart.php"><i class="fas fa-shopping-cart"></i><span><?php echo $num_items_in_cart;?></span></a>
                    <?php
                    $loggedIn = isset($_SESSION['id']) ? true : false;
                    if ($loggedIn)
                        {
                            echo "<a class='login' href='pages/logout.php'><i class='fas fa-user'></i></a>";
                        }
                    else
                        {
                            echo "<a class='login' href='pages/signin.php'><i class='fas fa-user'></i></a>";
                        }
                     
                    ?>
                </div>
            </li>
        </ul>
    </nav>
    <div class="mobile-menu"></div>
</body>
</html>