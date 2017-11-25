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
	 
	if($_SESSION['login_year']==1) {
	$r=mysql_query("select * from users JOIN 1yr On 1yr.Rollno='$roll' And users.rollno='$roll'",$con);
	$row=mysql_fetch_assoc($r);
	$_SESSION['login_cgpa']= $row['CGPA'];
	$cgpa=$_SESSION['login_cgpa'];
mysql_close($con);	
}
elseif($_SESSION['login_year']==2) {
	$r=mysql_query("select * from users JOIN 2yr On 2yr.Rollno='$roll' And users.rollno='$roll'",$con);
	$row=mysql_fetch_assoc($r);
	$_SESSION['login_cgpa']= $row['CGPA'];
	$cgpa=$_SESSION['login_cgpa'];
mysql_close($con);	
}

elseif($_SESSION['login_year']==3) {
	$r=mysql_query("select * from users JOIN 3yr On 3yr.Rollno='$roll' And users.rollno='$roll'",$con);
	$row=mysql_fetch_assoc($r);
	$_SESSION['login_cgpa']= $row['CGPA'];
	$cgpa=$_SESSION['login_cgpa'];
mysql_close($con);	
}

elseif($_SESSION['login_year']==4) {
	$r=mysql_query("select * from users JOIN 4yr On 4yr.Rollno='$roll' And users.rollno='$roll'",$con);
	$row=mysql_fetch_assoc($r);
	$_SESSION['login_cgpa']= $row['CGPA'];
	$cgpa=$_SESSION['login_cgpa'];
mysql_close($con);	
}


?>

<div class = "container"> 
<div class="row">
<div class="col-md-6">
<img class="img-respoonsive" src= "images/noimage.png" height="50%" width="50%">
</div>
<div class="col-md-4">
<table class="table table-striped">
<tr>
<th>Name</th>
<td><?php echo $name;?></td>
</tr>
<tr>
<th>Roll No</th>
<td><?php echo $roll;?></td>
</tr>
<tr>
<th>Year</th>
<td><?php echo $year;?></td>
</tr>
<tr>
<th>CGPA</th>
<td><?php echo $cgpa;?></td>
</tr>
<tr>
<th>Mobile</th>
<td><?php echo $phone;?></td>
</tr>
<tr>
<th>Email</th>
<td><?php echo $email;?></td>
</tr>
</table>
</div>
</div>
</div>
