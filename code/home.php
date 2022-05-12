<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="home.css">

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

    </div>
    <div class="vl"></div>

    <section class="home" id="home">

        <div class="content">
            <h3>adventure is worthwhile</h3>
            <p>dicover new places with us, adventure awaits</p>
        </div>

        <div class="video-container">
            <video src="Website.mp4" id="video-slider" loop autoplay muted></video>
        </div>
        </div>
    </section>
    
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>

            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>


</body>

</html>