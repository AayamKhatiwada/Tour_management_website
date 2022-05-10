<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="package.css">
</head>

<body>
    <div class="banner">
        <div class="navbar">
            <h2 class="heading">Tour Management System</h2>
            <ul>
                <li><a href="home.php">Home </a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="package.php">Tour package</a></li>
                <li><a href="enquiry.php">Enquiries</a></li>
                <li><a href="Contact_Us.php">Contact us</a></li>
            </ul>
            <ul>
                <li><a href="signin.php">Sign up/login</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
        <hr class="h">

    </div>
    <div class="vl"></div>

    <?php
    include("connection.php");
    $query="SELECT * FROM package";
    $result=mysqli_query($con,$query);
	  while($rows = mysqli_fetch_array($result)){?>
    <div class="rom-btm">
        <div class="col-md-3 room-left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
        <img src="paris.jpg" class="img-responsive" alt="">
    </div>
    <div class="col-md-6 room-midle wow fadeInUp animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
        <h4>Package Name: <?php echo $rows[1];?></h4>
        <h6>Package Type : <?php echo $rows[2];?></h6>
        <p><b>Package Location :</b> <?php echo $rows[3];?></p>
        <p><b>Features</b> <?php echo $rows[4];?></p>
    </div>
    <div class="col-md-3 room-right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
        <h5>USD <?php echo $rows[5];?></h5>
        <a href="packageDetail.php?number= <?php echo $rows[0];?> " class="view">Details</a>
    </div>
    <div class="clearfix"></div>
    </div>
    <?php
        }
    ?>

</body>

</html>