<?php
require_once('productFunctions.php');
// Set Variables for featured products
$featuredProductsNames = array();
$featuredProducts = readFeaturedProducts();
$featuredProductsCount = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products page</title>
    <link type="text/css" rel="stylesheet" href="products.css">
</head>
<body>
    <header id="header-bar" class="header-bar">
        <div class="logo">
            <a href="index.html">
                <img src="../img/logo.png" alt="logo"/>
            </a> 
        </div>
        <nav>
            <div class="topnav">
                <a href="index.php" class="active">Home</a>
                <a href="add_product.php">Add Product</a>
                <a href="view_product.php">View Products</a>
                <a href="my_account.php">My Account</a>
                <a href="login.php">Login</a>
            </div>
        </nav>
    </header>    
    <main>
    <div class="product-header">
        <h1>All Products</h1>
    </div>
    <div class="row">
        <?php
            foreach ($featuredProducts as $featuredProduct) {
            $name = $featuredProduct['name'];
            $price = $featuredProduct['price'];
            $description = $featuredProduct['description'];
            echo "
                <div class='product-container'>
                    <div class='product-img'></div>
                    <div class='product-name'><h3>$name</h3></div
                    <div class='product-price'><h3>$price</h3></div>
                    <div class='product-description'><h3>$description</h3>
                    <br>
                </div>
                ";
                $featuredProductsCount++;
                if ($featuredProductsCount == 5) {
                    break;
                }
                
            }
            ?>
    </div>
    </main>

<footer>
    <div class="bottomnav">
        <a href="aboutus.html">About Us</a>
        <a href="copyright.html">Copyright</a>
        <a href="privacy.html">Privacy</a>
        <a href="helplinks.html">Help links</a>
    </div>
</footer>
</html>



