<?php
    session_start();
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="packageDetail.css">

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

    <form name="book" method="post" style="padding: 50px 90px;">
    <?php
    include("connection.php");
    $num = $_GET['number'];
    $query="SELECT * FROM package";
    $result=mysqli_query($con,$query);
	  while($rows = mysqli_fetch_array($result)){
      if($rows[0]==$num){
      ?>
<div class="selectroom_top">
    <div class="col-md-4 selectroom_left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
      <img src="uploads/<?php echo $rows[7];?>" class="img-responsive" alt="">
    </div>
    <div class="col-md-8 selectroom_right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
    <h2><?php echo $rows[1];?></h2>
      <p><b>Package Type :</b> <?php echo $rows[2];?></p>
      <p><b>Package Location :</b> <?php echo $rows[3];?></p>
      <p><b>Features</b> <?php echo $rows[5];?></p>
      <div class="ban-bottom" style="text-align: center;">
        <div class="bnr-right">
          <label class="inputLabel">From</label>
          <input class="date hasDatepicker" id="datepicker" type="date" placeholder="dd-mm-yyyy" name="fromdate" required="" style="padding: 5px 5px; text-align:center;">
        </div>
        <div class="bnr-right">
          <label class="inputLabel">To</label>
          <input class="date hasDatepicker" id="datepicker1" type="date" placeholder="dd-mm-yyyy" name="todate" required="" style="padding: 5px 5px; text-align:center;">
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="grand" style="text-align: center;padding: 30px 10px;">
        <p>Grand Total</p>
        <h3>USD. <?php echo $rows[4];?></h3>
      </div>
    </div>
    <h3>Package Details</h3>
    <p style="padding: 20px 40px;"><?php echo $rows[6];?></p>
  </div>
<?php
    }
    }
?>
  <div class="selectroom_top">
    <h2>Travels</h2>
    <div class="selectroom-info animated wow fadeInUp animated animated" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp; margin-top: -70px;">
      <ul>

        <li class="spe" style="padding: 20px 0px;">
          <label class="inputLabel" style="padding: 0px 20px;">Comment</label>
          <input class="special" type="text" name="comment" required="" style="width: 500px; height: 70px;">
        </li>
        <li class="sigi" text-align="center" style="margin-top: 1%">
          <a data-toggle="modal" data-target="#myModal4"><button type="submit" name="book" class="btn-primary btn">Submit</button></a>
        </li>
        <div class="clearfix"></div>
      </ul>
    </div>
</form>

<?php
if (isset($_POST['book'])){
  if ($_SESSION['auth']){
    $num = $_GET['number'];
    $from_date = $_POST['fromdate'];
    $to_date = $_POST['todate'];
    $comment = $_POST['comment'];
    $number = $_SESSION['number'];
    $query = "SELECT * FROM user  WHERE `S no.` = '$number'";
    $result = mysqli_query($con,$query);

    while($rows = mysqli_fetch_array($result)){
        $name = $rows[1];
        $email = $rows[2];
        $phone_no = $rows[3];
    }

   $insert = "INSERT INTO booking(`package no`, name, mobileno, email, fromdate, todate, comment) VALUES ('$num','$name','$phone_no','$email','$from_date','$to_date','$comment')"; 
   if (mysqli_query($con,$insert)){
    echo "<script>alert('Booking has been submitted')</script>";
    }
    else{
        echo "<script>alert('Booking has not been submitted')</script>";
    }


  }else{
    echo "<script>alert('Please login before booking')</script>";
  }
}
?>
    <?php
    include("footer.php");
    ?>

</body>

</html>
