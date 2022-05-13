<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Contact_Us.css">

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
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="n Cu.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="padding-left: 150px;">
        <span class="big-circle"></span>
        <img src="img/shape.png" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
                <h3 class="title" style="color: #66CDAA;">Let's get in touch</h3>
                <p class="text">
                    Message us with your any question or enquiries!
                </p>

                <div class="info">
                    <div class="information">
                        <img src="img/location.png" class="icon" alt="" />
                        <p>Nepal , Kathmandu , Naxal</p>
                    </div>
                    <div class="information">
                        <img src="img/email.png" class="icon" alt="" />
                        <p>TourManagementSystem@free.com</p>
                    </div>
                    <div class="information">
                        <img src="img/phone.png" class="icon" alt="" />
                        <p>123-456-789</p>
                    </div>
                </div>

                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.twitter.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>

                <form autocomplete="off" method="POST">
                    <h3 class="title">Contact us</h3>

                    <div class="input-container textarea">
                        <textarea name="message" class="input" placeholder="message"></textarea>
                    </div>
                    <input type="submit" value="Send" class="btn" name="submit"/>
                </form>
        <?php
        include("connection.php");
        if (isset($_POST['submit'])){
            $description=$_POST['message'];
            $query= "INSERT INTO enquiry(description) VALUES ('$description')";
            if (mysqli_query($con,$query)){
                echo "<script>alert('Your message has been submitted')</script>";
            }
            else{
                echo "<script>alert('Your message has not been submitted')</script>";
            }

        }

     ?>
            </div>
        </div>
    </div>
    <?php
    include("footer.php");
    ?>
</body>

</html>
