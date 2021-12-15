<?php
session_start();
require "connection.php";

 $username = $_POST['doc_email'];  
 $password = $_POST['doc_password'];  
      
 //to prevent from mysqli injection  
 $username = stripcslashes($username);  
 $password = stripcslashes($password);  
 $username = mysqli_real_escape_string($con, $username);  
 $password = mysqli_real_escape_string($con, $password);  
      
 $sql = "select * from doctors where docEmail = '$username' and docPassword = '$password'";  
 $result = mysqli_query($con, $sql);  
 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
 $count = mysqli_num_rows($result);  
          
  if($count == 1){  
      echo "<h1><center> Login successful </center></h1>";  
      $_SESSION['login_user'] = $username;
      header("location: ../docter_panel/index.php");
  }
  else{   
    header("location: ../index.php?invalidInfo");
   }     

?>