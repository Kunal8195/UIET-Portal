<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db="iwt";


	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$year=$_POST['year'];
	$rollno=$_POST['rollno'];
	$password=md5($_POST['password']);
	$name=$_POST['name'];
	
	$r=mysql_query("insert into users values('$rollno', '$name', '$email', '$year', '$phoneno', '$password')",$con);
	if($r)
	  {
			header('location:mainlogin.php');	
			
			
	  }

	mysql_close($con);
	
?>