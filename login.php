
	<div class="row">
	<div class="col-sm-6">

        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal"  role="form" action="logincode.php" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="rollno" type="text" class="form-control" name="rollno" value="" placeholder="Roll No"> 
                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>
                                    


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                    		<input type="submit" name="submit" class="button" value="Login">
                                      

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Don't have an account! 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Sign Up Here
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>     



                        </div>                     
                    </div>  
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="signupcode.php" method="post">
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  <div class="form-group">
                                    <label for="rollno" class="col-md-3 control-label">Roll No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="rollno" placeholder="Roll No" required>
                                    </div>
                                </div>
                                
                               <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                  
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" >
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="year" class="col-md-3 control-label">Year</label>
                                    <div class="col-md-9">
                                        <!--input type="text" class="form-control" name="name" placeholder="Name"--->
                                        <select  class="form-control" name="year">
					  <option>1</option>
					  <option>2</option>
					  <option>3</option>
					  <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                
                                 <div class="form-group">
                                    <label for="phoneno" class="col-md-3 control-label">Phone No</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="phoneno" placeholder="Phone No" required>
                                    </div>
                                </div>
                                
                                    
                                
                                 <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                    
                              

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                       </div>
                                </div>
                                
                                
                                
                            </form>
                         </div>
                    </div>

               
               
                
         </div>
		 </div>
		 
				<div class="container">

				<div class="col-md-6">
<br><br>
<br>

		
		<div class="panel panel-default text-center">
<div class="panel-body" style="background-color: #66b3ff">

<h4>News & Notices</h4>
<br>
<marquee behaviour="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" scrolldelay=200>
<ul>
 	<li><a href="#">Reappear exams in July Reappear exams in July</a></li>
 	<li><a href="#">Fee Structue announced Reappear exams in July</a></li>
 	<li><a href="#">Last date to apply in July Reappear exams in July</a></li>
	<li><a href="#">Reappear exams in July Reappear exams in July</a></li>
 </ul>
</marquee>
 </div>
</div>
<br>
<marquee behavior="alternate" direction="left" scrollamount="5"><img src="images/uiet2.jpg"
 width="120" height="100" alt="Natural" /> &nbsp <img src="images/goonj.jpg"
 width="120" height="100" alt="Natural" />&nbsp <img src="images/effi.jpg"
 width="120" height="100" alt="Natural" />&nbsp <img src="images/udyami.png"
 width="120" height="100" alt="Natural" /><p></marquee>

					<div class="clearfix"> </div>
					
					
				</div>
		 </div>
</div>		 
 	<hr>