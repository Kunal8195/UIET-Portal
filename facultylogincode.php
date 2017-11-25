<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

if (empty($_POST['id']) || empty($_POST['password'])) {
$error = "Please Enter RollNo or Password";
echo $error;
}
else
{
	$id = $_POST['id'];
	$password = $_POST['password'];
	if($id == 'faculty' && $password == 'faculty'){
	$_SESSION['login_user'] = $id;
	header("location:facultymain.php"); // Redirecting To Other Page
	} else {
	$error = "Rollno or Password is invalid";
	echo $error;
	}	
		
}
}
?>