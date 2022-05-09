<?php 
    include("connection.php");
    $query="SELECT * FROM user";
    $result=mysqli_query($con,$query);
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TMS | Admin manage Users</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="manageUser.css">
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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Users</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Manage Users</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th>S no.</th>
							<th>Name</th>
							<th>Email id</th>
							<th>Phone number</th>

						  </tr>
						</thead>
						<tbody>
						<?php
						while($rows = mysqli_fetch_array($result)){?>
						  <tr>
							<td><?php echo $rows[0];?></td>
							<td><?php echo $rows[1];?></td>
							<td><?php echo $rows[2];?></td>
							<td><?php echo $rows[3];?></td>
						  </tr>
						  <?php
              				}
              				?>
						 						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->

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
