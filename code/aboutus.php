<?php
    session_start();
    error_reporting(0);
?>
<html>

<head>
    <title>About Us Section</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="aboutus.css">
</head>

<body>
<?php
                if (!$_SESSION['auth']){?>
                <div class="banner">
                    <div class="navbar">
                        <h2 class="heading">Tour Management System</h2>
                        <ul>
                            <li><a href="home.php">Home </a></li>
                            <li><a href="aboutus.php">About us</a></li>
                            <li><a href="package.php">Tour package</a></li>
                            <li><a href="enquiry.php">Enquiries</a></li>
                            <li><a href="Contact_Us.php">Contact us</a></li>
                        </ul>
                    <ul>
                    <li><a href='signin.php'>Sign up/login</a></li><li><a href='admin.php'>Admin</a></li>
                <?php
                }
                else{?>
                    <div class="banner">
                    <div class="navbar">
                        <h2 class="heading">Tour Management System</h2>
                        <ul>
                            <li><a href="home.php">Home </a></li>
                            <li><a href="aboutus.php">About us</a></li>
                            <li><a href="package.php">Tour package</a></li>
                            <li><a href="enquiry.php">Enquiries</a></li>
                            <li><a href="Contact_Us.php">Contact us</a></li>
                        </ul>
                    <ul>
                    <p style="color: black;">Welcome:</p>
                    <span style="color: black;"><?php  echo $_SESSION['name']; ?></span>
                    <li><a href="logout.php"><i class="fa fa-sign-out" style="color: black;">Logout</i></a></li>
                <?php
                $_SESSION['auth'] = '1';
                }
                ?>
            </ul>
        </div>
        <hr class="h">
        <div class="section">
            <div class="container">
                <div class="content-section">
                    <div class="title">
                        <h1>About Us</h1>
                    </div>
                    <div class="content">
                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                    <div class="social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="image-section">
                    <img src="immm.jpg">
                </div>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>

</body>

</html>