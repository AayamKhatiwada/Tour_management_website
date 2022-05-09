<?php 
    include("connection.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin Package Creation</title>
<link rel="stylesheet" href="createPackages.css">
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
					  <li> <a href="home.html"><i class="fa fa-sign-out" style="color: black;"></i> Logout</a> </li>
					</ul>
				  </li>
				</ul>
			  </div>
	
			  <div class="clearfix"> </div>
			</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Create Package </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Create Package</h3>
  	        	    	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Create Package" required>
									</div>
								</div>
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Type</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Package Type eg- Family Package / Couple Package" required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Location</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder=" Package Location" required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Price in USD</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Price is USD" required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Features</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Package Features Eg-free Pickup-drop facility" required>
									</div>
								</div>		


<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
									<div class="col-sm-8">
										<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required></textarea> 
									</div>
								</div>															
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
									<div class="col-sm-8">
										<input type="file" name="packageimage" id="packageimage" required>
									</div>
								</div>	

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Create</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>
					<?php
        if (isset($_POST['submit'])){
            $packagename=$_POST['packagename'];
            $packagetype=$_POST['packagetype'];
            $packagelocation=$_POST['packagelocation'];
            $packageprice=$_POST['packageprice'];
			$packagefeatures=$_POST['packagefeatures'];
			$packagedetails=$_POST['packagedetails'];
			//$packageimage=$_POST['packageimage'];

            $query= "INSERT INTO package(name, type, location, price, features, description) VALUES ('$packagename','$packagetype','$packagelocation','$packageprice','$packagefeatures','$packagedetails')";
            if (mysqli_query($con,$query)){
                echo "<script>alert('Package created')</script>";
            }
            else{
                echo "<script>alert('Package not created')</script>";
            }

        }

     ?>
     
      


  </div>
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
