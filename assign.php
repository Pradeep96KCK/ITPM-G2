<?php 
//This is the directory where images will be saved 
$target = "assignmentsstore/"; 
    if(!is_dir($target)) mkdir($target);
$target = $target . basename( $_FILES['File']['name']); 

//This gets all the other information from the form 

$fname=($_FILES['File']['name']); 
$tmpName  = $_FILES['File']['tmp_name'];
$fileSize = $_FILES['File']['size'];
$fileType = $_FILES['File']['type'];



//process the file
$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc()){
$fname = addslashes($fname);}

//Connects to your Database 
//require_once 'login.php';

$db_server = mysqli_connect("localhost","root","","file_upload");


if(!$db_server) die("Unable to connect to MySQL" .mysql_error());

//mysql_select_db("file_upload",$db_server)or die("Unable to connect to database" .mysql_error()); 

//Writes the information to the database 

$query = "INSERT INTO files (file_name) VALUES ('$fname')";
mysqli_query($db_server,$query) ; 
 //Writes the File to the server 

 if(move_uploaded_file($_FILES['File']['tmp_name'], $target)) {
     
 //Tells you if its all ok 
echo "<br> Assignment ". basename( $_FILES['File']['name']). " submitted"; 
       } 

  else { 

         //Gives and error if its not 
 echo "Sorry, there was a problem uploading your file."; 
    } 

     ?> 
     

