<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ABC Learning Management System</title>
		<link rel="stylesheet" type="text/css" href="css/faculty_css.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script>
		.mySlides{display:none;}
	</script>

</head>	


<body bgcolor="white" >

<div class="wrapper">
	<div class="top-bar clearfix">
		<div class="top-bar-links">
			 
			 	<?php
			 	if(isset($_SESSION['userID'])) {
			 		
			 	echo "Logged in as : {$_SESSION['userID']}<br>";
			 	echo '<li><a href="logout.php"><strong>Logout</strong></a></li>';


			 	echo '<li><a href="Settings.php"><strong>            
			 	Settings</strong></a></li>';

			 	}
			 	else{
			 		echo'<ul>
			 
			 	
			 	<li><a href="logout.php"><strong>Logout</strong></a></li>
			 </ul>';}
			 ?>
		</div>
	</div>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="mycourses.php">My Courses</a></li>
			<li><a href="">Libraries</a></li>
			
			<li><a href="Settings.php">Profile Settings</a></li>

		</ul>
	</nav>

			<div class="homecontent clearfix">
				<div class="homecol">
											   <!--soc div start-->
					<div class="uni">
					<h2><b>COMPUTING</b></h2>
					<ul>
						<li><h3><a href="">Foundation</a></h3></li><br/>		
						<li><h3><a href="commodules.php">Year 1</a></h3></li><br>	
						<li><h3><a href="">Year 2</a></h3></li><br>	
						<li><h3><a href="">Year 3 </a></h3></li><br>		
						<li><h3><a href="">Year 4 </a></h3></li><br>				
					</ul>
					</div>
				</div>		

																				<!--soc div end-->


													<!--SOM end-->


				

			</div><br/><br/><br/>
</div>





			<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>ABC University</h4><br/>
							
							<br/>
							<h5>
								inquiries@ABC.lk <br/> 011 1230458
								</h5>
						</div>
				</div>

				<div class="footercol">
					 <h3>Contact Us</h3>
					 	<form action="index.html">
					 		<input type="text" name="fname" placeholder="Enter Your First Name" required>
					 		<input type="text" name="lname" placeholder="Enter Your Last Name" required>
					 		<input type="text" name="email" placeholder="Enter Your Email" required>
					 		<textarea name="message" placeholder="Type Your Message" cols="23" rows="8"></textarea>
					 		<button>Submit</button>
					 	</form>
				</div>

				<div class="footercol">
					<h3>Social media</h3> 
					<a href=""><i class="fa fa-facebook-official"> Facebook</i></a><br>
					<a href=""><i class="fa fa-twitter" > Twitter</i></a><br>
					<a href=""><i class="fa fa-linkedin" > Linkedin</i></a><br>
					<a href=""><i class="fa fa-instagram" > Instagram</i></a>
					
				</div>

				<div class="footercol">
					<h3>Tweets</h3> 
					<div class="tweet">
						<a href="#">@ABC</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco <br/>2 days ago</p>

					</div>
				</div>

				</footer>

				<div class="copyright">
					<div class="left">
						Copyright &copy; www.ABCkl;'
						1.lk All Right Reserverd 2017
					</div>

					<div class="right">
						This is Developed by Team Red-X
					</div>
				</div>


	</div>

	</body>
	</html>