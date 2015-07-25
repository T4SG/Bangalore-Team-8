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
							</div>	
						</ul>
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
							<li><a href="index.php">Welcome</a></li>
                            <li><a href="course.php">Courses</a></li>
                            <li><a href="login.php">Login</a></li> 
							<li><a class="menu-top-active" href="registration.php">Registration</a></li> 
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
                    <h1 style="color:blue" class="page-head-line">Register </h1>
                </div>
            </div>
            <div class="row">
				<div class="col-md-6">
					<div class="panel panel-default" >
						<div class="panel-heading">
							Registration Form
						</div>
						<div class="panel-body">
							<form id="sponsors" action="sponsorhandler.php"  enctype="multipart/form-data" method="post" role="form">
								<div class="form-group">
									<label for="exampleInputName">Sponsor ID</label>
									<input type="text" class="form-control" id="id" name="s_id" placeholder="Sponsor ID" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Sponsor name</label>
									<input type="Text" class="form-control" id="sname" name="sname" placeholder="Sponsor name" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Sponsorship</label>
									<input type="text" class="form-control" id="sponsor" name="sponsor" />
								</div>
								<div class="form-group">
									<label for="exampleInputpassword2">Amount</label>
									<input type="text" class="form-control" id="amt" name="amt" placeholder="Amount" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Date</label>
									<input type="date" id="date" name="date" required/>
								</div>
								<input name="submit" value="Enter" type="submit" class="btn btn-default">
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
                    &copy; 2015 J.P.MORGAN | By : BANGALORE-TEAM8
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
