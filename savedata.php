<?php
   include('session.php');
?>
<?php include 'inc/dbconnect.php'; ?>
<?php
//Fetching Values from URL
$name= $_POST['name1'];
$usrname= $_POST['usrname1'];
$email= $_POST['email1'];
$contact= $_POST['contact1'];
$userlevel= $_POST['userlevel1'];
$address= $_POST['address1'];
$password= md5($_POST['password1']);
//Insert query
$query = mysql_query("insert into users(fullName, userName, email, password, created_by, created, phone_no, address, userLevel) values ('$name', '$usrname', '$email', '$password', '$created_by', 'NOW())', '$contact', '$address', '$userlevel')");
//echo $query;
echo "Form Submitted Succesfully";
//mysql_close($connection); // Connection Closed
?>