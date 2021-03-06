<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<link rel="stylesheet" href="enquiry.css">
</head>
<body>
	<img src="enquiry-image.jpg" alt="" style="height:400px; width: 600px; position:absolute; margin-left: 600px; margin-top: 200px;">

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
                    <ul style="display: flex; gap: 10px;">
                    <p style="color: black;">Welcome:</p>
                    <span style="color: black;"><?php  echo $_SESSION['name']; ?></span>
                    <li><a href="logout.php"><b style="color: black;">Logout</b></a></li>
                <?php
                $_SESSION['auth'] = '1';
                }
                ?>
            </ul>
        </div>
        <hr class="h">

    </div>
    <div class="vl"></div>

<div class="privacy">
	<div class="container" style="padding-left: 150px;">
		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown; color: #66CDAA;">Enquiry Form</h3>
		<form name="enquiry" method="post">
		 	<p style="width: 350px;">
		
			<b>Full name</b>  <input type="text" name="fname" class="form-control" id="fname" placeholder="Full Name" required="">
	</p> 
<p style="width: 350px;">
<b>Email</b>  <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email id" required="">
	</p> 

	<p style="width: 350px;">
<b>Mobile No</b>  <input type="text" name="mobileno" class="form-control" id="mobileno" maxlength="10" placeholder="10 Digit mobile No" required="">
	</p> 

	<p style="width: 350px;">
<b>Subject</b>  <input type="text" name="subject" class="form-control" id="subject"  placeholder="Subject" required="">
	</p> 
	<p style="width: 350px;">
<b>Description</b>  <textarea name="description" class="form-control" rows="6" cols="50" id="description"  placeholder="Description" required=""></textarea> 
	</p> 

			<p style="width: 350px;">
<button type="submit" name="submit" class="btn-primary btn">Submit</button>
			</p>
			</form>

		
	</div>
</div>

<?php
		include("connection.php");
        if (isset($_POST['submit'])){
            $name=$_POST['fname'];
            $email=$_POST['email'];
            $phoneno=$_POST['mobileno'];
			$subject=$_POST['subject'];
            $description=$_POST['description'];

            $query= "INSERT INTO enquiry(name, email, phoneno, subject, description) VALUES ('$name','$email','$phoneno','$subject','$description')";
            if (mysqli_query($con,$query)){
                echo "<script>alert('ENquiry has been submitted')</script>";
            }
            else{
                echo "<script>alert('ENquiry has not been submitted')</script>";
            }

        }

     ?>
         <?php
    include("footer.php");
    ?>
</body>
</html>