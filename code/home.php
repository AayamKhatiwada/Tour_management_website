<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="home1.css">

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
                    <ul style="display:flex;">
                    <p style="color: black; padding-right:10px;">Welcome: <?php echo $_SESSION['name'];?></p>
                    <li><a href="logout.php"><i class="fa fa-sign-out" style="color: black; padding-left:10px;">Logout</i></a></li>
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

    <div class="vl"></div>

    <h1 style="text-decoration: underline;color: #66CDAA;margin: 40px 90px;text-align: center;">Packages</h1>

    <?php
    include("connection.php");
    $query="SELECT * FROM package";
    $result=mysqli_query($con,$query);
	  while($rows = mysqli_fetch_array($result)){?>
    <div class="rom-btm" style="display:flex;">
        <div class="col-md-3 room-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
        <img src="uploads/<?php echo $rows[7];?>" class="img-responsive" alt="hvgashgv">
    </div>
    <div class="col-md-6 room-midle wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <h4>Package Name: <?php echo $rows[1];?></h4>
        <h6>Package Type : <?php echo $rows[2];?></h6>
        <p><b>Package Location :</b> <?php echo $rows[3];?></p>
        <p><b>Features</b> <?php echo $rows[5];?></p>
    </div>
    <div class="col-md-3 room-right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
        <h5>USD <?php echo $rows[4];?></h5>
        <a href="packageDetail.php?number= <?php echo $rows[0];?> " class="view">Details</a>
    </div>
    <div class="clearfix"></div>
    </div>
    <?php
        }
    ?>

    <?php
    include("footer.php");
    ?>
</body>

</html>