

<body data-spy="scroll" data-target="#my-navbar">
<style>
.navbar-inverse {
    background-color:#5c8a8a;
    color:#ffffff;
    border-radius:0;
}

.navbar-inverse .navbar-nav > li > a {
    color:#fff;
}
.navbar-inverse .navbar-nav > .active > a, .navbar-nav > .active > a:hover, .navbar-nav > .active > a:focus {
    color: #ffffff;
    background-color:transparent;
}
.navbar-inverse .navbar-brand {
    color:#eeeeee;
}
</style>




<!--Navbar-->

<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a href="index.php" class="navbar-brand">Information Technology Department</a>
</div><!--navbar-header-->
<div class="collapse navbar-collapse" id="navbar-collapse">

 
    <ul class="nav navbar-nav">
<li><a href="#login">Log In</a>
<li><a href="#faq">FAQ</a>
<li><a href="#contactus">Contact Us</a>
<li style="margin-top:6px"> 
  
</ul>
<div class="navbar-right">
<a href="logout.php" class="btn btn-info navbar-btn pull-right">Sign out</a>
<h4 class="pull-right" style="margin-right:10px;"> <b> 
<?php 
if($_SESSION['login_user']=='admin') 
{echo "<a href = 'facultyinfo.php' style='text-decoration:none; color:#ffffff; '>Hello, ".$_SESSION['login_user']."</a>"; }
elseif($_SESSION['login_user']=='faculty')
{echo "<a href = 'facultymain.php' style='text-decoration:none; color:#ffffff;'>Hello, ".$_SESSION['login_user']."</a>"; }
else 
{echo "<a href = 'studentportal.php' style='text-decoration:none; color:#ffffff;'>Hello, ".$_SESSION['login_user']."</a>"; }
?> </b></h4>
</div>
</div>
</div><!--End Container-->
</nav><!--End Navbar-->
