<?php 

    include_once("function/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Toko Online</title>
    
    <link href="<?php echo BASE_URL."css/style.css"; ?>" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="container">
        <div id="header">
            <a href="<?php echo BASE_URL."index.php"; ?>">
                <img src="<?php echo BASE_URL."images/logo.png"; ?>" alt="">
            </a>
            <div id="menu">
                <div id="user">
                    <a href="<?php echo BASE_URL."index.php?page=login"; ?>">Login</a>
                    <a href="<?php echo BASE_URL."index.php?page=register"; ?>">Register</a>
                </div>
                <a href="<?php echo BASE_URL."index.php?page=cart"; ?>" id="cart-button">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" alt="">
                </a>
            </div>
        </div>
        <div id="content">
            <?php 
                $filename = "$page.php";
                
                if(file_exists($filename)) {
                    include_once($filename);
                } else {
                    echo "File Tidak tersedia";
                }
            ?>
            <div id="footer">
                <p>copyright TokoOnline 2021</p>
            </div>
        </div>
    </div>
</body>
</html>