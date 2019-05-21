
<?php session_start(); ?>
<? if(isset($POST['update'])){
  $error=0;
  if($POST['pass']!=$_POST['cpass'])
}   ?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Update Profile </title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/RegForm.css" type="text/css"/>    
</head>
      <body bgcolor="#6BB5F6">
        
        <div class="reg-form"><center><h1><font color="grey"><b>Update Profile</b></font></h1></center>
        
            <section class="form" >


            <form  method="post" action="" >           
            

              <h1>Update Profile</h1>

                <div class="input id">
                    <input type="text" id="userID" name="userID"  placeholder="Your ID" value="<?php echo $_SESSION['userID'];   ?>" required/>
                    
                </div>
               <div class="input fname">
                    <input type="text" id="firstname" name="firstname" placeholder="First name" value="<?php echo $_SESSION['userID'];   ?>"  required/>
                </div>
                <div class="input lname">
                    <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $_SESSION['userID'];   ?>"  required/>
                </div>
                <div class="input email">
                    <input type="text" id="email" name="email" placeholder="Email" required="please enter email with @" value="<?php echo $_SESSION['userID'];   ?>" />
                </div>
                 <div class="input mbl">
                    <input type="text" id="pno" name="pno" value="" size="10" maxlength="10" placeholder="Phone Number" value="<?php echo $_SESSION['userID'];   ?>"  />
                </div>
                 <div class="input pass">
                    <input type="password" id="psw" name="psw" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" value="<?php echo $_SESSION['userID'];   ?>"  required/>
                </div>
                 <div class="input pass">
                    <input type="password" placeholder="Confirm Password" id="cmpsw" name="cmpsw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Re-type the password" value="<?php echo $_SESSION['userID'];   ?>" required>
                </div>
                <div class="input gender" style="font-size: 16px;font-family: sans-serif,fantasy; color: gray;">
                    <input type="radio" name="gender" value="male" checked> Male<br>
                    <input type="radio" name="gender" value="female"> Female<br>
                    
                </div>

               <?php  
                    $ps1 = "cmpsw";
               ?>
    

              </script>
                 <p class="error-msg">Wrong Credential</p>
              
                  
             
                 <div>
                    <center><button class="btn" name="Update" value="Update">Update</button></center>
                </div>

                <? $query = "UPDATE user column_name='".$userID."', 'WHERE id='".$_SESSION['id']."'";  ?>
                
            </form>





        </section>
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#login").click(function(){
                    if($("#username").val() == ""){
                        $(".input").addClass("error");
                        $("#username").css({"border":"2px solid red"});
                    }
                     if($("#password").val() == ""){
                        $(".pass").addClass("error");
                         $("#password").css({"border":"2px solid red"});
                    }     
                    })
                $(".input").click(function(){
                   $(".input").removeClass("error");
                    $("#username").css({"border":"2px solid #ddd"});
                    
                    $("#password").css({"border":"2px solid #ddd"});
                    
                    
                })
                
                                  })              
                              
        </script>
          
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#create").click(function(){
                    if($("#name").val() == ""){
                        $(".input").addClass("error");
                        $("#name").css({"border":"2px solid red"});
                    }
                     if($("#ino").val() == ""){
                        $(".ino").addClass("error");
                         $("#ino").css({"border":"2px solid red"});
                    }     
                    })
                $(".input").click(function(){
                   $(".input").removeClass("error");
                    $("#name").css({"border":"2px solid #ddd"});
                    
                    $("#ino").css({"border":"2px solid #ddd"});
                    
                    
                })
                
                                  })              
                              
        </script>
        
 
    </body>


</html>




