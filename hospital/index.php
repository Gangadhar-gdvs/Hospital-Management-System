
<!DOCTYPE HTML>
<html>
	<head>
		<title>Web Medical Management System</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
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
		<style type="text/css" >
			.up{
	width:100%;
	background-color:#2FA5EB !important;
	border-bottom:0px solid #f0f0f0;
}
.up div{
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
.top div{
	padding-left: 80%;
	padding-right:200px ;
	background-color: red;
}

.log{
	padding-left: 80%;
	padding-right:200px ;
	
	width:100px;
	
	border-bottom:2px solid #f0f0f0;
}
.log div{
	width:1200px;
	background-color:pink;
	font-family:calibri;
	padding:10px;
	text-align:left;
}
.log div a{
	padding:10px;
	text-decoration:none;
	color:gray;
}
.log div a:hover{
	color:#428bca;
	border-bottom:2px solid gray;
}
</style>
	</head>
	<body>
		<div class="up">
		<div>
		 Contact IN +91 6300355608 | jntu@hospital.com 
		</div>
	</div>
			<div class="header" style="background:white;padding-bottom:10px;padding-top:0px ;">

				<div class="wrap">
				
				<div class="logo">
                  
					<a href="index.php" style="font-family:Georgia;font-size:50px;padding-top:10px;text-shadow: red;">JNTU Hospital </a>
				</div>
				 
				<div class="top-nav" style="padding-top:10px">
					
					<ul>

						<li><a href="index.php" style="border-bottom-left-radius: 5px;border-top-left-radius: 5px;">Home</a></li>

						<li><a href="contact.php"style="border-bottom-right-radius: 5px;border-top-right-radius: 5px;">Contact</a></li>
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
		    <div class="content-grids" style="background:blue;">
		    	<div class="wrap" >
		    	<div class="section group" >


				<div class="listview_1_of_3 images_1_of_3"style="background: lightgoldenrodyellow;padding-bottom: 10px;">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img3.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Patients</h3>
						  <p>Register & Book Appointment</p>
						  <div class="button" ><span><a href="hms/user-login.php" >Click Here</a></span></div>
				    </div>
				</div>

				<div class="listview_1_of_3 images_1_of_3" style="background: lightgoldenrodyellow;padding-bottom: 10px;">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img1.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Doctors Login</h3>

						  <div class="button"><span><a href="hms/doctor/">Click Here</a></span><br></br></div>
					</div>
				</div>


					<div class="listview_1_of_3 images_1_of_3" style="background: lightgoldenrodyellow;padding-bottom: 10px;">
					<div class="listimg listimg_1_of_2">
						  <img src="images/grid-img2.png">
					</div>
					<div class="text list_1_of_2">
						  <h3>Admin Login</h3>

						  <div class="button"><span><a href="hms/admin/">Click Here</a></span><br></br></div>
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
