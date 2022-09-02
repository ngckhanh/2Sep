<?php
require_once('productFunctions.php');
require_once("productprocessing.php");
$all_products = getAllProducts($_SESSION["$productId"]);
$number_of_products = count($all_products);
$limit = 5;
$page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;
$paginationStart = ($page - 1) * $limit;
$no_of_lines = $number_of_products;
$allRecrods = $no_of_lines;
// Calculate total pages
$totalPages = ceil($allRecrods / $limit);
// Prev + Next
$prev = $page - 1;
$next = $page + 1;
$path = "../main/products.csv";
$last_product = $paginationStart + $limit;
$sort_value = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View products page</title>
    <link type="text/css" rel="stylesheet" href="add_product.css">
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
                <a href="products.php">View Products</a>
                <a href="my_account.php">My Account</a>
                <a href="login.php">Login</a>
            </div>
        </nav>
    </header>    
    <main>
    <div class="container-product">
            <div class="row rowProduct">
                <h1>All products</h1>
            </div>
            <div class="row">
                <?php displayProduct($paginationStart, $last_product)?>
            </div>
            <div class="page-btn">
                <?php 
                if($page == 1){ 
            ?>
                <span class="active_pagination"><i class="fa fa-arrow-left"></i></span>
                <?php
                } else{
            ?>
                <span class="pagination_span"
                    onclick="window.location.href='<?php echo "product.php?sort=".$sort_value."&page=". $prev; ?>'"><i
                        class="fa fa-arrow-left"></i></span>
                <?php
                }
            ?>
                <?php for($i = 1; $i <= $totalPages; $i++ ): 

                if($page == $i){
                    ?>
                <span class="active_pagination" onclick="window.location.href='#'"><?php echo $i; ?></span>
                <?php
                } else{
                    ?>
                <span class="pagination_span"
                    onclick="window.location.href='product.php?sort=<?php echo $sort_value ?>&page=<?php echo $i; ?>'"><?php echo $i; ?></span>
                <?php
                }
            ?>
                <?php endfor; ?>
                <?php 
                if($page >= $totalPages){ 
            ?>
                <span class="active_pagination"><i class="fa fa-arrow-right"></i></span>
                <?php
                } else{
            ?>
                <span class="pagination_span"
                    onclick="window.location.href='<?php echo "product.php?sort=".$sort_value."&page=". $next; ?>'"><i
                        class="fa fa-arrow-right"></i></span>
                <?php
                }
            ?>
            </div>
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

