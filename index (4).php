<?php
session_start();
$imgflag='none';
$logflag='visible';
if(isset($_SESSION['login_user'])){
$imgflag='visible';	
$logflag='none';
}
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
    <title>Edupedia</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
	 <link href="assets/css/grayscale.css" rel="stylesheet" />
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
							<li><a class="menu-top-active" href="index.php">Welcome</a></li>
                            <li><a href="course.php">Courses</a></li>
                            <li><a href="login.php" style="display:<?php echo $logflag?>;">Login</a></li> 
							<li><a href="registration.php" style="display:<?php echo $logflag?>;">Registration</a></li> 
							<!--<li class="dropdown" style="display:<?php echo $imgflag?>;">
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
	
	 <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading"><font color="" >Edupedia</font></h1>
                        <p class="intro-text"><font color="" >Find all the courses here.<br>Enjoy Learning!</font></p>
                        <!--<h4><center>ALL COURSES</center></h4><br>	
						<a href="http://www.tutorialspoint.com/java/"><img src="java.png"/  width=80px height=80px></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="http://www.tutorialspoint.com/cprogramming/"><img src="c.png"/  width=80px height=80px></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="http://www.tutorialspoint.com/android/"><img src="android1.jpg"/  width=100px height=80px></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="http://www.tutorialspoint.com/python/"><img src="python.jpg"/  width=80px height=80px></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="http://www.tutorialspoint.com/perl/"><img src="perl.jpg"/  width=80px height=80px>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                    </div>
					
					
                </div>
            </div>
        </div>
		<div class="row">
			
	

				
            </div>
    </header>
	
    
    <!-- CONTENT-WRAPPER SECTION END
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
		<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2015 MSIT | By : SDVDR
                </div>

            </div>
        </div>
    </footer>
    </footer>-->
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/grayscale.js"></script>
</body>
</html>
