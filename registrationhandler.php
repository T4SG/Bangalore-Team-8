	<?php
	

	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password1']) || empty($_POST['password2']) ||  empty($_FILES["uploadedimage"]["name"])) {
	$error = "Some fields are empty";
	if(empty($_FILES["uploadedimage"]["name"]))
	{
		$error = "hello image is empty";
	}
}
	else
	{
	// Define $username and $password
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password1=$_POST['password1'];
	$password2=$_POST['password2'];
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysql_connect("http://ec2-52-69-232-19.ap-northeast-1.compute.amazonaws.com/", "root", "code4good");
	// To protect MySQL injection for Security purpose
	$name = stripslashes($name);
	$email= stripslashes($email);
	$password1 = stripslashes($password1);
	$password2 = stripslashes($password2); // don't actually need this
	$name = mysql_real_escape_string($name);
	$email= mysql_real_escape_string($email);
	$password1 =mysql_real_escape_string($password1);
	$password2 =mysql_real_escape_string($password2);// don't actually need this
	$db = mysql_select_db("mysql", $connection);
	$sql=mysql_query("SELECT from registration where email='$email'",$connection);
	$row=mysql_num_rows($sql);
	if($row!=1)
	{
		echo $row;
	function GetImageExtension($imagetype)
	{
	if(empty($imagetype)) return false;
	switch($imagetype)
	{
	case 'image/bmp': return '.bmp';
	case 'image/gif': return '.gif';
	case 'image/jpeg': return '.jpg';
	case 'image/png': return '.png';
	default: return false;
	}
	}
	
	
	
	if (!empty($_FILES["uploadedimage"]["name"])) {
	
	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;

	
	if(move_uploaded_file($temp_name, $target_path)) {
	
	
	
	mysql_query("INSERT into registration(name,email,password,image) VALUES ('$name','$email','$password1','".$target_path."')",$connection);
	
	echo "Hi";
	
	ob_start();

	 echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">';
	ob_end_flush();	
	echo "hello";
	}else{
	
	exit("Error While uploading image on the server");
	} 
	
	}
	
	// Selecting Database
	
	mysql_close($connection); // Closing Connection
	}
	else
	{
		echo "email id already exists.Please provide another emailid";
		
	}
}
	}
	
	?>
	
