<?php 

session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>ABCLMS Download Assignments</title>
		<link rel="stylesheet" type="text/css" href="css/commodulescss.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
<body bgcolor="#EFFAD9" >

<div class="wrapper">
	<div class="top-bar clearfix">
		<div class="top-bar-links">
			 <ul>
			 	 <?php 
			 echo 'You are Login as :'.$_SESSION['username'].'';
			 ?>
			 	<li><a href="index.php"><strong>Logout</strong></a></li>
			 </ul>
		</div>
	</div>

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="lecture.php">Lectures</a></li>
			<li><a href="Events.php">Events</a></li>
			<li><a href="thingstodo.php">Things To Do</a></li>
			<li><a href="unis.php">Universities</a></li>
		</ul>
	</nav>



<div id="div1">
      
      <div id="div13">
      <h4 id="head1">Select The Module</h4>
      <br><br><br>

      

      <h3 class="head2"><a class="link2" href="downloadass.php">Module-1010 Programming with C language</a></h3>
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Module-1020 Introduction to Computer Science</a></h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Module-1030 Database and Mangment System</a></h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Module-1040 Web Application Development</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1050 Computer Science</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1060 Mathematics</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1070 Proffesional Development</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1080 Computer Architecture</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1090 Algorithms</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1100 Data Communations</a></h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1110 Object Oriented Programming with JAVA</a></h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Module-1120 System Design</a></h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href="">Module-1130 Introduction to Computer Networks	</a></h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href=""></a>Module-1140 Object Oriented Programming with C++</h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href=""></a>Module-1150 Computer Architecture	</h3> 
      <br><br>
      <hr>
      <h3 class="head2"><a class="link2" href=""></a>Module-1160 Database Management Systems -DM</h3> 
      <br><br>
      <hr>
       <h3 class="head2"><a class="link2" href="">Module-1170 Data Communations</a></h3> 
 	   <br><br>
      <hr>
      
      </div>
</div>


	<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>NSBM Green University Town</h4><br>
							<h5>
								309 , Dampe ,<br>
								Pitipana Road ,	<br>
								Colombo ,<br>
								Sri Lanka	
							</h5>
							<br>
							<h5>
								inquiries@nsbm.lk <br> 011 544 5000
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
						<a href="#">@NSBMGreenUni</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco <br>2 days ago</p>

					</div>
				</div>

			</footer>

			<div class="copyright">
				<div class="left">
					Copyright &copy; www.nsbm.lk All Right Reserverd 2017
				</div>

				<div class="right">
					This is Developed by Team Red-X
				</div>
			</div>


</div>

</body>
</html>