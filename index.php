<?php 
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>ABC Learning Managment System</title>
	<meta charset="UTF=8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

		<link rel="stylesheet" type="text/css" href="css/main.css">  
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script>
		.mySlides{display:none;}
	</script>

</head>


<body bgcolor="#E0FFFF" >

<div class="wrapper">
	<div class="top-bar clearfix">
		<div class="top-bar-links">
			 
			 	<?php
			 	if(isset($_SESSION['username'])) {
			 		echo '<ul>
			 	<li>You are Login as :'.$_SESSION['username'].'</li>
			 	<li><a href="logout.php"><strong>Logout</strong></a></li></ul>';

			 	}
			 	else{
			 		echo'<ul>
			 
			 	<li><a href="register.php"><strong>SignUp</strong></a></li>
			 	<li><a href="login.php"><strong>Login</strong></a></li>
			 </ul>';}
			 ?>
		</div>
	</div>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="mycourses.php">Courses</a></li>
			<li><a href="#">Events</a></li>
			<li><a href="#">Things To Do</a></li>
			<li><a href="#">Universities</a></li>
			
		</ul>
	</nav>

		<div class="homeslidebar" style="max-width: auto" >
			<img class="mySlides" src="img/123456.jpg" height="450px"  width="1000px" >
			<img class="mySlides" src="img/654321.jpg" height="450px"  width="1000px" >
			<img class="mySlides" src="img/987654.jpg" height="450px"  width="1000px" >
		</div>

		<!--Slide Bar in Home Page-->
		<script>
		var mySlide1 = 0;
		changeslide();
		
			function changeslide() {
   			 var i;
    		 var x = document.getElementsByClassName("mySlides");
   				 for (i = 0; i < x.length; i++) {
      				 x[i].style.display = "none";  
    			}

    		mySlide1++;
    			if (mySlide1 > x.length) {mySlide1 = 1}    
    			x[mySlide1-1].style.display = "block";  
    			setTimeout(changeslide, 3000); 
			}
		</script>



			<div class="homecontent clearfix">
				<div class="homecol">
					<h2>Affliated Universities</h2>
					<div class="uni">
						<img src="img/ucd.gif" alt="ucd"> 
						<h3>University College Of Dublin</h3>
						<p>About information on UCD </p>
					</div>
					<br>
					<div class="uni">
						<img src="img/plymouth.png" alt="ply"> 
						<h3>Plymouth University</h3>
						<p>About information on Plymouth</p>
					</div>
					<br>
					<div class="uni">
						<img src="img/lim.png" alt="lim"> 
						<h3>Limkokwing University</h3>
						<p>About information on Limkokwing </p>
					</div>
					<br>
					<div class="uni">
						<img src="img/vic.png" alt="vic"> 
						<h3>Victoria University</h3>
						<p>About information on Victoria </p>
					</div>
				</div>

				<div class="homecol">
					<h2>About ABC</h2>
					<center><img src="img/aboutnew.jpg" alt="nsbmgreenuni"></center>
					<p>ABC Uni is the best Learning Management Site... </p>
					<br>
					<a href="#">Read More About us &raquo;</a>
				</div>


			

			<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>ABC Learning Management</h4><br>
							<h5>
									
							</h5>
							<br>
							<h5>
								ABCLearning@gmail.lk <br> 011 7 100 100
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
					<a href="#"><i class="fa fa-facebook-official"> Facebook</i></a><br>
					<a href="#"><i class="fa fa-twitter" > Twitter</i></a><br>
					<a href="#"><i class="fa fa-linkedin" > Linkedin</i></a><br>
					<a href="#"><i class="fa fa-instagram" > Instagram</i></a>
					
				</div>

				<div class="footercol">
					<h3>Tweets</h3> 
					<div class="tweet">
						<a href="#">@ABCLearningManagement</a>
						

					</div>
				</div>

			</footer>

			<div class="copyright">
				<div class="left">
					Copyright &copy; www.sliit.lk All Right Reserverd 2019
				</div>

				<div class="right">
					This is Developed by Team abclms
				</div>
			</div>


</div>

</body>
</html>


