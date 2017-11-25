<?php

session_start();

	$host='localhost';
	$uname='root';
	$pwd='';
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


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Portal</title>
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    
    <link href="assets/css/style.css" rel="stylesheet" />
     
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  class="navbar-brand" href="index.php">Student Portal

                </a>
            </div>

            <div class="notifications-wrapper">
<ul class="nav">
               
               
                <li class="dropdown navbar-right">
                   <a class="dropdown-toggle" data-toggle="dropdown" href="#" >
                        <i class="fa fa-user-plus"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" >
                        
                       
                        <li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav  class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/123.png" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <center><strong><b>Student</b> </strong></center></a>
                    </li>
                    
                    <li>
                        <a  href="studentportal.php"><i class="fa fa-dashcube "></i>Syllabus</a>
                    </li>
<li>
                        <a class="active-menu"  href="resultstudent.php"><i class="fa fa-bolt "></i>View Details</a>
                    </li>
                   
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
             <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Result</h1>
                        
                        <div class = "container"> 
<div class="row">

<div class="col-md-4 col-md-offset-2">
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


<div class="col-md-4">
<img class="img-respoonsive pull-right"  src= "images/no_photo.jpg" height="50%" width="50%">
</div>
</div>
</div>

		
		
</div>
			
			
                    </div>
                </div>
              
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
   <footer >
          <b> &copy; Admin Portal | By : Akash Upadhyay  </b>
    </footer>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
