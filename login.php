<?php
   include("inc/dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysql_real_escape_string($_POST['username']);
      $mypassword = mysql_real_escape_string(md5($_POST['password'])); 
      
      $sql = "SELECT * FROM users WHERE userName = '$myusername' and password = '$mypassword'";
      $result = mysql_query($sql);
      $row = mysql_fetch_array($result);
      //$active = $row['active'];
      
      $count = mysql_num_rows($result);
      // print_r($count);
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         header("location: home.php");
      }else {
         //error = "Your Login Name or Password is invalid";
         //header("location: index.php?error");
         $_SESSION['message'] = "Your Login Name or Password is invalid.";
          header("Location: index.php");
      }
   }
?>