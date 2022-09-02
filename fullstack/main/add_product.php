<?php
require_once('code.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add product page</title>
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
                <a href="view_product.php">View Products</a>
                <a href="my_account.php">My Account</a>
                <a href="login.php">Login</a>
            </div>
        </nav>
    </header>  
    <main>  
        <div class="container">
            <div class="container-header">
                <h1>Add Product</h1>
            </div>
            <div class="container-body">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
                    <table class="first_table">
                        <tr>
                            <td><label for="product_name">Name</label></td>
                            <td><input type="text" name="product_name" placeholder="Enter Product Name" class="form-control"></td>
                            <span><?php echo $nameErr ?></span>
                        </tr>
                        <tr>
                            <td><label for="price">Price</label></td>
                            <td><input type="number" name="price" placeholder="Enter Selling Price" class="form-control"></td>
                            <span><?php echo $priceErr ?></span>
                        </tr>
                        <tr>
                            <td><label for="file">Upload Image</label></td>
                            <td><input type="file" name="image" class="form-control"></td>
                        </tr>
                        <tr>
                            <td><label for="description">Description</label></td>
                            <td><textarea rows="3" cols="50" name="description" placeholder="Enter Description" class="form-control"></textarea></td>
                            <span><?php echo $descriptionErr ?></span>
                        </tr>
                    </table>

                    <table class="second_table">
                        <tr>
                            <td><input type="submit" id="add_btn" name="add_product_btn" value="Add Product"></td>
                            <td><input type="submit" id="view_btn" name="product_btn" value="View Products"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>
</body>
<footer>
    <div class="bottomnav">
        <a href="aboutus.html">About Us</a>
        <a href="copyright.html">Copyright</a>
        <a href="privacy.html">Privacy</a>
        <a href="helplinks.html">Help links</a>
    </div>
</footer>
</html>

