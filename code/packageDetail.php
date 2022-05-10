<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="packageDetail.css">

<body>
    <div class="banner">
        <div class="navbar">
            <h2 class="heading">Tour Management System</h2>
            <ul>
                <li><a href="home.php">Home </a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="package.php">Tour package</a></li>
                <li><a href="enquiry.html">Enquiries</a></li>
                <li><a href="Contact_Us.html">Contact us</a></li>
            </ul>
            <ul>
                <li><a href="signin.html">Sign up/login</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
        <hr class="h">

    </div>
    <div class="vl"></div>

    <form name="book" method="post" style="padding: 50px 90px;">
  <div class="selectroom_top">
    <div class="col-md-4 selectroom_left wow fadeInLeft animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInLeft;">
      <img src="admin/pacakgeimages/1581490262_2_1.jpg" class="img-responsive" alt="">
    </div>
    <div class="col-md-8 selectroom_right wow fadeInRight animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInRight;">
    
    <?php
    include("connection.php");
    $num = $_GET['number'];
    $query="SELECT * FROM package";
    $result=mysqli_query($con,$query);
	  while($rows = mysqli_fetch_array($result)){
      if($rows[0]==$num){
      ?>

    <h2><?php echo $rows[1];?> (<?php echo $rows[2];?>)</h2>
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
          <a href="#" data-toggle="modal" data-target="#myModal4" class="btn-primary btn"> Book</a>
        </li>
        <div class="clearfix"></div>
      </ul>
    </div>
</form>

</body>

</html>