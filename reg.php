<?php 


	$conn = mysqli_connect("localhost","root","","ABCLMS");

	if (!$conn){

		die ("Connection Failed : ".mysqli_connect_error());

	}

	$id=$_POST['userID'];
	$firstName=$_POST['firstname'];
	$LastName=$_POST['lastname'];
	$email=$_POST['email'];
	$pno =$_POST['pno'];
	$password=$_POST['psw'];
	$gender=$_POST['gender'];
	$type="student";

	$enc = base64_encode($password);
	


	$sql = "INSERT INTO user(userID,firstName,LastName,email,type,mobileno,password,gender) VALUES('$id', '$firstName','$LastName', '$email','$type', '$pno','$enc','$gender')";


                        
                        session_start();
                        $userID = "userID";
                        $_SESSION['$userID'] = $userID;

                     

	$result = mysqli_query($conn,$sql);

	header("location:faculty.php");

 ?>