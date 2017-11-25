<?php

session_start();

	$host='localhost';
	$uname='root';
	$pwd='pan';
	$db="iwt";

$roll=$_SESSION['login_roll_no'];
$year=$_SESSION['login_year'];
$email = $_SESSION['login_email'];
$phone = $_SESSION['login_phone'];
$name = $_SESSION['login_user'];


	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	if($_SESSION['login_year']==3) {
	$r=mysql_query("select * from users JOIN 3yr On 3yr.Rollno='$roll' And users.rollno='$roll'",$con);
	$row=mysql_fetch_assoc($r);
	$_SESSION['login_cgpa']= $row['CGPA'];
	$cgpa=$_SESSION['login_cgpa'];
mysql_close($con);	
}

?>
