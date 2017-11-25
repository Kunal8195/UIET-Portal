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
                <a  class="navbar-brand" href="index.php">Admin Portal

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
                            <img src="assets/img/user.png" class="img-circle" />

                           
                        </div>

                    </li>
                     <li>
                        <a  href="#"> <center><strong><b>Admin</b> </strong></center></a>
                    </li>
                    <li>
                        <a class="active-menu" href="facultyinfo.php"><i class="fa fa-sitemap "></i>Faculty Info</a>
                        
                    </li>
                    
                   
                    <li>
                        <a  href="adminsyl.php"><i class="fa fa-dashcube "></i>Syllabus</a>
                    </li>
<li>
                        <a   href="adminstudent.php"><i class="fa fa-bolt "></i>First Year Details</a>
                    </li>
					<li>
                        <a  href="adminstudent2.php"><i class="fa fa-bolt "></i>Second Year Details</a>
                    </li>
					<li>
                        <a href="adminstudent3.php"><i class="fa fa-bolt "></i>Third Year Details</a>
                    </li>
					<li>
                        <a   href="adminstudent4.php"><i class="fa fa-bolt "></i>Fourth Year Details</a>
                    </li>
					<li>
                        <a  href="admincompany.php"><i class="fa fa-dashcube "></i>Past Recruiters</a>
                    </li> 
                  
                </ul>
            </div>

        </nav>
        <!-- /. SIDEBAR MENU (navbar-side) -->
        <div id="page-wrapper" class="page-wrapper-cls">
             <div class="row">
			 			                         <h1 class="page-head-line">Faculty Info</h1>
			        <div class="col-md-12">
		
			<div class="container">
	<table class = "table table-striped  table-hover">
	  
	  
	  <tr bgcolor="grey">
		<th> S.No </th>
		<th> Name </th>
		<th> Position </th>
		<th> Contact No. </th>
	  </tr>
	  <tr>
		<td> 1. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Prof.%20Harmesh%20Kumar.pdf"> Dr. Harmesh Kumar</td>
		<td> Professor</td>
		<td> 9432876515</td>
	  </tr>
	  <tr>
		<td> 2. </td>
		<td>  Dr. Manu Sharma</td>
		<td> Associate Professor</td>
		<td> 9736145465</td>
	  </tr>
	  <tr>
		<td> 3. </td>
		<td> Dr. Sanjay Vohra</td>
		<td> Associate Professor</td>
		<td> 9725468130</td>
	  </tr>
	  <tr>
		<td> 4. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20IT/Dr_Krishan.pdf">Dr. AmrinderPal Singh</td>
		<td> Assistant Professor</td>
		<td> 9213046852</td>
	  </tr>
	  <tr>
		<td> 5. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/SHANKAR%20SEHGAL.pdf"> Dr. Shankar Sehgal</td>
		<td> Assistant Professor</td>
		<td> 9316475284</td>
	  </tr>
	  <tr>
		<td> 6. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Harbhinder%20Singh.pdf"> Mr. Harbhinder Singh</td>
		<td> Assistant Professor</td>
		<td> 9468776611</td>
	  </tr>
	  <tr>
		<td> 7. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Surjeet%20Singh.pdf"> Mr. Surjeet Singh </td>
		<td> Assistant Professor</td>
		<td> 9764585454</td>
	  </tr>
	  <tr>
		<td> 8. </td>
		<td> Ms. Poonam Sood</td>
		<td> Assistant Professor</td>
		<td> 9464685271</td>
	  </tr>
	  <tr>
		<td> 9. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Amandeep%20Singh.pdf"> Mr. Amandeep Singh Wadwa</td>
		<td> Assistant Professor</td>
		<td> 9632154870</td>
	  </tr>
	  <tr>
		<td> 10. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/JASWINDER%20SINGH%20MEHTA.pdf"> Mr. Jaswinder Singh Mehta</td>
		<td> Assistant Professor</td>
		<td> 9401013654</td>
	  </tr>
	  <tr>
		<td> 11. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Amit%20Chauhan.pdf"> Dr. Amit Chauhan</td>
		<td> Assistant Professor</td>
		<td> 9876543210</td>
	  </tr>
	  <tr>
		<td> 12. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Prashant%20Jindal.pdf"> Dr. Prashant Jindal</td>
		<td> Assistant Professor</td>
		<td> 9632185454</td>
	  </tr>
	  <tr>
		<td> 13. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Rajesh%20Madan.pdf"> Mr. Rajesh Kumar</td>
		<td> Assistant Professor</td>
		<td> 9741025803</td>
	  </tr>
	  <tr>
		<td> 14. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Parveen%20Goyal.pdf"> Mr. Parveen Goel</td>
		<td> Assistant Professor</td>
		<td> 9530461837</td>
	  </tr>
	  <tr>
		<td> 15. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Anjali%20Gupta.pdf"> Ms. Anjali Gupta</td>
		<td> Assistant Professor</td>
		<td> 9846212173</td>
	  </tr>
	  <tr>
		<td> 16. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Gagandeep%20Singh.pdf"> Mr. Gagandeep Singh</td>
		<td> Assistant Professor</td>
		<td> 9456123871</td>
	  </tr>
	  <tr>
		<td> 17. </td>
		<td> Mr. Tukesh Soni</td>
		<td> Assistant Professor</td>
		<td> 9421316431</td>
	  </tr>
	  <tr>
		<td> 18. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Chander%20Prakash.pdf"> Mr. Chander Prakash</td>
		<td> Assistant Professor</td>
		<td> 9513642827</td>
	  </tr>
	  <tr>
		<td> 19. </td>
		<td> <a href="http://nbauiet.puchd.ac.in/cvs%20of%20Mechanical/Amit%20Thakur.pdf"> Mr. Amit Thakur</td>
		<td> Assistant Professor</td>
		<td> 9497601403</td>
	  </tr>
	  
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
