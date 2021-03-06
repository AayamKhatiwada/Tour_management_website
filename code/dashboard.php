<?php 
    include("connection.php");
?>
<html style="overflow: hidden;">

<head>
  <title>TMS | Admin Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="dashboard.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <div class="page-container" style="background-color: rgb(255, 255, 255);">
    <!--/content-inner-->
    <div class="left-content">
      <div class="mother-grid-inner">
        <!--header start here-->
        <div class="header-main" style="background-color: rgb(255, 255, 255);">
          <div class="logo-w3-agile" style="background-color: rgb(255, 255, 255);">
            <h1><a style="text-decoration: none; color: black;">Admin Tour Management</a></h1>
          </div>

          <div class="profile_details w3l" style="background-color: rgb(255, 254, 254);">
            <ul>
              <li class="dropdown profile_details_drop">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <div class="profile_img">

                    <div class="user-name">
                      <p style="color: black;">Welcome</p>
                      <span style="color: black;">Administrator</span>
                    </div>
                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                    <div class="clearfix"></div>
                  </div>
                </a>
                <ul class="dropdown-menu drp-mnu">
                  <li> <a href="home.php"><i class="fa fa-sign-out" style="color: black;"></i> Logout</a> </li>
                </ul>
              </li>
            </ul>
          </div>

          <div class="clearfix"> </div>
        </div>
        <!--header end here-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i></li>
        </ol>
        <!--four-grids here-->
        <div class="four-grids">
          <div class="col-md-3 four-grid">
            <a href="manageUser.php">
            <div class="four-agileits" style="background-color: rgb(51, 51, 51);
            display: flex;
            flex-direction: row;
            gap: 10px;">
              <div class="icon" style="margin-left: 30px;">
                <i class="glyphicon glyphicon-user" style="color: rgb(255, 255, 255);" aria-hidden="true"></i>
              </div>
              <div class="four-text" style="    display: flex;
              text-align: center;">
                <h3  style="color: rgb(255, 255, 255);">User:</h3>
                <?php
                  $query="SELECT * FROM `user` ORDER BY `S no.` DESC LIMIT 1;";
                  $result=mysqli_query($con,$query);
						      while($rows = mysqli_fetch_array($result)){?>
                <h4  style="color: rgb(255, 255, 255);     margin-top: 8px;
                margin-left: 10px;"> <?php echo $rows[0];?> </h4>
                  <?php
              				}
              		?>
              </div>

            </div>
          </a>
          </div>
          <div class="col-md-3 four-grid">
            <a href="manageBooking.php">
            <div class="four-agileinfo" style="background-color: rgb(51, 51, 51);
            display: flex;
            flex-direction: row;
            gap: 10px;">
              <div class="icon" style="margin-left: 30px;">
                <i class="glyphicon glyphicon-list-alt" style="color: rgb(255, 255, 255);" aria-hidden="true"></i>
              </div>
              <div class="four-text" style="    display: flex;
              text-align: center;">
                <h3>Bookings:</h3>

                <?php
                  $query="SELECT * FROM `booking` ORDER BY `S no.` DESC LIMIT 1;";
                  $result=mysqli_query($con,$query);
						      while($rows = mysqli_fetch_array($result)){?>
                <h4 style="color: rgb(255, 255, 255);     margin-top: 8px;
                margin-left: 10px;"><?php echo $rows[0];?></h4>
                <?php
              				}
              		?>

              </div>

            </div>
            </a>
          </div>
          <div class="col-md-3 four-grid">
            <a href="manageEnquiry.php">
            <div class="four-w3ls" style="background-color: rgb(51, 51, 51);
            display: flex;
            flex-direction: row;
            gap: 10px;">
              <div class="icon" style="margin-left: 30px;">
                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
              </div>
              <div class="four-text" style="    display: flex;
              text-align: center;">
                <h3>Enquiries:</h3>

                <?php
                  $query="SELECT * FROM `enquiry` ORDER BY `S no.` DESC LIMIT 1;";
                  $result=mysqli_query($con,$query);
						      while($rows = mysqli_fetch_array($result)){?>
                <h4 style="color: rgb(255, 255, 255);     margin-top: 8px;
                margin-left: 10px;"><?php echo $rows[0];?></h4>
                <?php
              				}
              		?>

              </div>

            </div>
            </a>
          </div>
          <div class="col-md-3 four-grid">
            <a href="managePackages.php">
            <div class="four-wthree" style="background-color: rgb(51, 51, 51);
            display: flex;
            flex-direction: row;
            gap: 10px;">
              <div class="icon" style="margin-left: 30px;">
                <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
              </div>
              <div class="four-text" style="    display: flex;
              text-align: center;">
                <h3>Total packages:</h3>

                <?php
                  $query="SELECT * FROM `package` ORDER BY `S no.` DESC LIMIT 1;";
                  $result=mysqli_query($con,$query);
						      while($rows = mysqli_fetch_array($result)){?>
                <h4 style="color: rgb(255, 255, 255);     margin-top: 8px;
                margin-left: 10px; padding-right: 20px;"><?php echo $rows[0];?></h4>
                <?php
              				}
              		?>

              </div>

            </div>
            </a>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>

			<!--/sidebar-menu-->
      <div class="sidebar-menu" style="background-color: rgb(51, 51, 51);">
        <header class="logo1" style="background-color: rgb(51, 51, 51);">
          <a class="sidebar-icon" style="background-color: rgb(51, 51, 51); color: white; border: rgb(51, 51, 51); font-size: 17px; text-decoration: none;">Admin Dashboard </a> 
        </header>
          <div style="border-top:1px ridge rgba(0, 0, 0, 0.15)"></div>
              <div class="menu">
                <ul id="menu">
                  <li><a href="dashboard.php"><i class="fa fa-tachometer" style="color: rebeccapurple;"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
                  
                 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true" style="color: yellowgreen;"></i><span> Tour Packages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
                     <ul id="menu-academico-sub" >
                     <li id="menu-academico-avaliacoes" ><a href="createPackages.php">Create</a></li>
                    <li id="menu-academico-avaliacoes" ><a href="managePackages.php">Manage</a></li>
                    </ul>
                  </li>
                <li id="menu-academico" ><a href="manageUser.php"><i class="fa fa-users" style="color: red;" aria-hidden="true"></i><span>Manage Users</span><div class="clearfix"></div></a></li>
                
                <li><a href="manageBooking.php"><i class="fa fa-list" style="color: blue;" aria-hidden="true"></i>  <span>Manage Booking</span><div class="clearfix"></div></a></li>
                <li><a href="manageEnquiry.php"><i class="fa fa-file-text-o" style="color: green;" aria-hidden="true"></i>  <span>Manage Enquiries</span><div class="clearfix"></div></a></li>
                 
                
                </ul>
              </div>
              </div>	
            </div>     
</body>

</html>
