<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['name']) || empty($_POST['password'])) {
$error = "Please Enter RollNo or Password";
echo $error;
}
else
{
	$name = $_POST['name'];
	$password = $_POST['password'];
	if($name =='admin' && $password == 'admin'){
	$_SESSION['login_user'] = $name;
	header("location:facultyinfo.php"); // Redirecting To Other Page
	} else {
	$error = "Rollno or Password is invalid";
	echo $error;
	}	
		
}
}
?>