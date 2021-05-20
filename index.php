<?php 

    include_once("function/helper.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online</title>
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
                <a href="<?php echo BASE_URL."index.php?page=cart"; ?>">
                    <img src="<?php echo BASE_URL."images/cart.png"; ?>" alt="">
                </a>
            </div>
        </div>
        <div id="content">
            <div id="footer">
                <p>copyright TokoOnline 2021</p>
            </div>
        </div>
    </div>
</body>
</html>