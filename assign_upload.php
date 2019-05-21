<?php 

session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>ABC Learning Management System</title>
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
			 	<li><a href="index.php"><strong>Sign Up</strong></a></li>

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
      <h3 id="head1">Assigment 02</h3>
      <br><br><br>

     <form method="post" action="assign.php" enctype="multipart/form-data" id="upload">
    
    <p id="countdown" ></p>
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
    <br>
    <br>
    <br>
<br>

      <table alignment=center border=1 cellspacing=1 cellpadding=20 width=400 height=300>
    	<tr>
            		<td><center>Grading Status</center></td>
            		<td><center>Not Graded</center></td>
            	</tr>
            <tr>
                <td><center>Due Date</center></td>
                <td><center>12.00 AM, 1st September 2019</center></td>
            </tr>
    	<tr>
    		<td colspan="2"><center><input type="file" name="File"></center> 
                	<br> <center>(Name of the file has to be your ID)</center>
                	<br> <center><input type="submit" name="submit" value="submit"></center>
                </td>
    	</tr>
    </table>
    <br>
		
</form>

      </div>
</div>


	<footer>
				<div class="footercol">
					<h3>Powerd By</h3> 
						<div class="address">
							<h4>ABCMLS University Town</h4><br>
							<h5>
								309 , Dampe ,<br>
								Pitipana Road ,	<br>
								Colombo ,<br>
								Sri Lanka	
							</h5>
							<br>
							<h5>
								inquiries@abclms.lk <br> 011 544 5000
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
						<a href="#">@ABCUni</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco <br>2 days ago</p>

					</div>
				</div>

			</footer>

			<div class="copyright">
				<div class="left">
					Copyright &copy; www.abclms.lk All Right Reserverd 2017
				</div>

				<div class="right">
					This is Developed by Team Red-X
				</div>
			</div>


</div>

</body>
</html>