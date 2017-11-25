<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Portal</title>
    
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
                <a  class="navbar-brand" href="index.php">Faculty Portal

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
                            <img src="assets/img/fac.png" class="img-circle" />

                           
                        </div>

						 <li>
                        <a  href="#"> <center><strong><b>Faculty</b> </strong></center></a>
                    </li>
                    
                    </li>
                        <li>
                        <a href="facultysyl.php"><i class="fa fa-sitemap "></i>Syllabus</a>
                        
                    </li>
                    
<li>
                        <a  href="adminstudentfa.php"><i class="fa fa-bolt "></i>First Year Details</a>
                    </li>
					<li>
                        <a  href="adminstudentfb.php"><i class="fa fa-bolt "></i>Second Year Details</a>
                    </li>
					<li>
                        <a  href="adminstudentfc.php"><i class="fa fa-bolt "></i>Third Year Details</a>
                    </li>
					<li>
                        <a class="active-menu"  href="adminstudentfd.php"><i class="fa fa-bolt "></i>Fourth Year Details</a>
                    </li>
                    
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
             <div class="row">
			 			                         <h1 class="page-head-line">Student Info</h1>
			        <div class="col-md-12">
		
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwt";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
		
<table class="table table-hover table-bordered" style="background-color: #e0ebeb">
  <thead>
    <tr>
      <th>Rollno</th>
      <th>Name</th>
   <th>CGPA</th>
    </tr>
  </thead>
  <tbody>
  
<?php  
  $sql = "SELECT Rollno, Name, CGPA FROM 4yr";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr><td>{$row['Rollno']}</td><td>{$row['Name']}</td><td>{$row['CGPA']}</td>
	 </tr>\n";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
  </tbody>
  
</table>
			
			
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
