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
                <li><a href="home.html">Home </a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="#">Tour package</a></li>
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
      <h2>Swiss Paris Delight Premium 2020 (Group Package)</h2>
      <p class="dow">#PKG-1</p>
      <p><b>Package Type :</b> Group Package</p>
      <p><b>Package Location :</b> Paris and Switzerland</p>
      <p><b>Features</b> Round trip Economy class airfare valid for the duration of the holiday - Airport taxes - Accommodation for 3 nights in Paris and 3 nights in scenic Switzerland - Enjoy continental breakfasts every morning - Enjoy 5 Indian dinners in Mainland Europe - Exp</p>
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
        <h3>USD.800</h3>
      </div>
    </div>
    <h3>Package Details</h3>
    <p style="padding: 20px 40px;">Pick this holiday for a relaxing vacation in Paris and Switzerland. Your tour embarks from Paris. Enjoy an excursion to popular attractions like the iconic Eiffel Tower. After experiencing the beautiful city, you will drive past mustard fields through Burgundy to reach Switzerland. While there, you can opt for a tour to Interlaken and then to the Trummelbach Falls. Photostop at Zurich Lake and a cable car ride to Mt. Titlis are the main highlights of the holiday. </p>
  </div>
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