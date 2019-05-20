

<html>

<?php 
                session_start();
                 $userID = "userID";
                 $_SESSION['$userID'] = $userID;
 ?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login page</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/sty_loggin.css" type="text/css"/>    
</head>
  <body q>
          

  
        <div class="login-form" style="margin-right: 400px;"> <center><h1><font color="grey"><b>Login</b></font></h1></center>
        <div class="login-face"><img src="img/User_Avatar-512.png"></div>
            <section class="form">

            
            <form  method="POST" name="signin" action="log1.php"> 


                <div class="input uname ">
                    <input type="text" name="userID" id="userID" placeholder="Username" required/>
                    <i class="fa fa-user"></i>
                </div>

                 
                 <div class="input pass">
                    <input type="password" name="password" id="password" placeholder="Password" required/>
                     <i class="fa fa-lock"></i>
                </div>
                                    
            
             
                 <div>
                    <input type="submit" name="submit" id="login" value="LOGIN" />
                </div>
                
                <br/>
                 <a href="register.php" style="float:right;color:gray;font-size:14px;text-decoration:none;font-family:sans-serif,fantasy;margin-bottom:10px">Create New Account</a>

   <!--              <?php 


                  if(isset($_POST["submit"])){

                     $conn = mysqli_connect("localhost","root","","ABCLMS");

                    if (!$conn){

                      die ("Connection Failed : ".mysqli_connect_error());

                    }
                    $count = 0;

                  $id = $_POST['userID'];
                  $pass = $_POST['password'];
                  $_SESSION['$userID'] = $id;
                  $enc = base64_encode($pass);
                  $sql = mysqli_query($conn,"SELECT * FROM user WHERE userID='$id' AND password='$enc'");
                  $count = mysqli_num_rows($sql);

                  if($count == 0){
                    
                    ?>
                    <script type="text/javascript">alert("wrong username or password");</script>
                    
                    
                  <?php
                    
                  }
                  else {

                 session_start();
                 $userID = "userID";
                 $_SESSION['$userID'] = $userID;
              
                    $_SESSION['userID'] = $row['userID'];   
                    header('Location:faculty.php');


                  }

         

                  }
                 ?> -->
                   
            </form>
                </section>
        </div>

       
    
         
        
    </body>

  

</html>

