<?php
include('loginhandler.php'); // Includes Login Script
$imgflag='none';
$logflag='none';
if(isset($_SESSION['login_user']))
{
	header("location: course.php");	
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
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
                            <li><a class="menu-top-active" href="login.php">Login</a></li> 
							<li><a href="registration.php">Registration</a></li> 
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
                    <h1 style="color:blue" class="page-head-line">Login</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
					<div class="panel panel-default">
                        <div class="panel-heading">
                           Login Form
                        </div>
                        <div class="panel-body">
							<form action="" method="post" >
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" />
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Password" />
								</div>
								<div class="form-group">
									<input name="submit" type="submit" value="Login" >
									<br><span style="color:red";><?php echo $error; ?></span>
							</form>
									<br><a href="forgot_password.php">Forgot password....?</a>
								</div>								
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
