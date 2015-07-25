<?php

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Registration</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
	
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
$(document).ready(function (e) {
	$("#registrationform").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "registrationhandler.php",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#targetLayer").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
</head>
<body>
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
						<ul id="menu-top" class="nav navbar-nav navbar-left">
							<div class="media">
                               <a class="media-left" href="#">
                                    <img src="logo-tab.jpg" class="img-thumbnail" alt="logo" width="120" height="20">
                               </a>
							</div>	
						</ul>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
							<li><a href="index.php">Welcome</a></li>
                            <li><a href="course.php">Courses</a></li>
                            <li><a href="login.php">Login</a></li> 
							<li><a class="menu-top-active" href="registration.php">Registration</a></li> 
							<!--<li class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
									<span class="glyphicon glyphicon-user" style="font-size: 15px;"></span>
								</a>
								<div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="assets/img/64-64.jpg" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Jhon Deo Alex </h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <hr />
                                <h5><strong>Personal Bio : </strong></h5>
                                Anim pariatur cliche reprehen derit.
                                <hr />
                                <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="index.html" class="btn btn-danger btn-sm">Logout</a>

								</div>
							</li>-->

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
   <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Register </h1>
                </div>
            </div>
            <div class="row">
				<div class="col-md-6">
					<div class="panel panel-default" >
						<div class="panel-heading">
							Registration
						</div>
						<div class="panel-body">
							<form id="registrationform" action="registrationhandler.php"  enctype="multipart/form-data" method="post" role="form">
									
								<div class="form-group">
									<label for="exampleInputName">Name</label>
									<input type="Text" class="form-control" id="name" name="name" placeholder="Enter Name" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Email</label>
									<input type="email" class="form-control" id="email1" name="email" placeholder="Enter Email" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="password1" name="password1" placeholder="Password" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputpassword2">Confirm Password</label>
									<input type="password" class="form-control" id="password2" name="password2" placeholder="Re-Enter Password" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Image input</label>
									<input type="file" id="exampleInputFile" name="uploadedimage" required/>
									<p class="help-block">Example .jpg |.png |.tif |.gif;</p>
								</div>
								<input name="submit" value="Register" type="submit" class="btn btn-default">
								<div style="color:red" id="targetLayer"></div>
								<span style="color:red"><?php echo $error; ?></span>
							</form>
																					
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <!--REGISTRATION SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 MSIT | By : SDVDR
                </div>
            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>				
