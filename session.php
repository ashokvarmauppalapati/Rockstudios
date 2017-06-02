<?php
   include('inc/dbconnect.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysql_query("select userName from users where userName = '$user_check' ");
   
   $row = mysql_fetch_array($ses_sql, MYSQL_ASSOC);
   //print_r($row);
   $login_session = $row['userName'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>