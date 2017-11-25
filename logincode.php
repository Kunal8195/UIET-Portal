<?php

	$host='localhost';
	$uname='root';
	$pwd='';
	$db="iwt";

	
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {



if (empty($_POST['rollno']) || empty($_POST['password'])) {
$error = "Please Enter RollNo or Password";
echo $error;
}
else
{
	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$rollno=$_POST['rollno'];
	$password=md5($_POST['password']);
	$r=mysql_query("select * from users where password='$password' AND rollno='$rollno'",$con);
	$row=mysql_fetch_assoc($r);
	if($row) { 
	$_SESSION['login_user']=$row['name']; // Initializing Session
 	$_SESSION['login_roll_no']= $row['rollno'];
 	$_SESSION['login_year']=$row['year'];
 	$_SESSION['login_email']=$row['email'];
 	$_SESSION['login_phone']=$row['phoneno'];
 	//echo $row['rollno'];
	header("location:studentportal.php"); // Redirecting To Other Page
	} else {
	$error = "Rollno or Password is invalid";
	echo $error;
	}	
	mysql_close($con);	
}
}
?>