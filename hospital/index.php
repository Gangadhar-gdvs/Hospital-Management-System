
<!DOCTYPE HTML>
<html>
	<head>
		<title>Web Medical Management System</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		 
			    $(function () {

			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 300
			      });
			});
		  </script>
		<style>
			.top{
	width:100%;
	background-color:#2FA5EB !important;
	border-bottom:0px solid #f0f0f0;
}
.top div{
	width:1200px;
	color:#fff;
	background-color:#2FA5EB !important;
	font-family:calibri;
	padding-top:5px ;
	padding-left:100px;
	padding-bottom:5px ;
	padding-right:3px ;
	text-align:right;
}
		 	.nav_down{
	width:100%;
	background-color:#2FA5EB !important;
	border-bottom:2px solid #f0f0f0;
}
.nav_down div{
	width:1329px;
	color:#fff;
	background-color:#000;
	font-family:calibri;
	padding:10px;
	text-align:left;
}
</style>
	</head>
	<body>
		<div class="top">
		<div>
		 Contact IN +91 6300355608 | jntu@hospital.com 
		</div>
	</div>
			<div class="header" style="background: hotpink;padding-bottom: 10px;">
				<div class="wrap">
				
				<div class="logo">
					<a href="index.php" style="font-family:Georgia;font-size:40px;">JNTU Hospital </a>
				</div>
				
				<div class="top-nav" style="padding-top: 10px;" >
					<ul>

						<li class="active" ><a href="index.php" style="border-bottom-left-radius: 5px;border-top-left-radius: 5px;">Home</a></li>

						<li class="active"><a href="contact.php"style="border-bottom-right-radius: 5px;border-top-right-radius: 5px;">Contact</a></li>
					</ul>
				
			</div>
				<div class="clear"> </div>
				
			</div>
			
		</div>
		<div class="clear"> </div>
			
					<div class="image-slider">
						<!-- Slideshow 1 -->
					    <ul class="rslides" id="slider1">
					      <li><img src="images/slider1.jpg" alt=""></li>
					      <li><img src="images/slider2.jpg" alt=""></li>
					      <li><img src="images/slider3.jpg" alt=""></li>
					      <li><img src="images/slider5.jpg" alt=""></li>
					      <li><img src="images/slider6.jpg" alt=""></li>
					    
					    </ul>
					
					</div>
					
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="wrap" >
		    	<div class="section group" >


				<div class="listview_1_of_3 images_1_of_3"style="background: lightgoldenrodyellow;padding-bottom: 26px;">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patients</h3>
						  <p>Register & Book Appointment</p>
						  <div class="button"><span><a href="hms/user-login.php"><p style="color:red;">Click Here</p></a></span><br></div>
				    </div>
				</div>

				<div class="listview_1_of_3 images_1_of_3" style="background: lightgoldenrodyellow;">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctors Login</h3>

						  <div class="button"><span><a href="hms/doctor/"><p style="color:red;">Click Here</p></a></span><br></br></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3" style="background: lightgoldenrodyellow;">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Admin Login</h3>

						  <div class="button"><span><a href="hms/admin/"><p style="color:red;">Click Here</p></a></span><br></br></div>
				     </div>
				</div>
			</div>
		    </div>
		   </div>
		 <br></br>
		   <br></br>
		<div class="nav_down">
		<div>
		 &copy; JNTU Hospital, site designed & developed by JNTU  CSE  Students
		</div>
	</div>
	</body>
</html>
