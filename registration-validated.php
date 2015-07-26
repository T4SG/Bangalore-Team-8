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
 <script src="http://code.jquery.com/jquery-1.9.1.js">
    
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
p1=document.getElementById("password1");
p2=document.getElementById("password2");

function onblurcpwd()
       {
           flag = 0;
           if(p1.value == "" || p2.value == "")
            { alert("Sorry, one or more password fields are empty.");  flag = 1;}
           else if(p1.value != p2.value)
           {  alert("Sorry, the two passwords are not same."); flag = 1; }
           if(flag == 1)
           {
              p1.value = "";
              p2.value = "";
              p1.focus();
           }
       
       }
name=document.getElementById("name");
var letters ="/^[A-Za-z]+$/";  
      if(!(name.value.match(letters)) && name.value!=null)  
      {  
      alert('Please enter letters in Name');  
      name.value="";
      name.focus();

      }  
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
							<form id="registrationform" action="registrationhandler.php"  enctype="multipart/form-data" method="post" role="form">
								<div class="form-group">
									<label for="exampleInputName">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required/>
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
									<input type="password" class="form-control" id="password2"  name="password2" placeholder="Re-Enter Password" onblur="onblurcpwd" required/>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">Image input</label>
									<input type="file" id="exampleInputFile" name="uploadedimage" />
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
