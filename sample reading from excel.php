<?php
require('connection.php');
//echo $_SERVER['SCRIPT_FILENAME'];
//echo $_SERVER["DOENT_ROOT"];
//$tmpName  = $_FILES['file']['tmp_name'];
//echo $tmpName;
//echo $_FILES['file']['name'];

//echo mysql_real_escape_string($_POST['file']);
$sql="LOAD DATA LOCAL INFILE 'C:/Users/just/Documents/student.csv' INTO TABLE stu_personal FIELDS TERMINATED BY ',' ENCLOSED BY '' LINES TERMINATED BY '\r\n'(USN,name,email_id)";
$d=mysql_query($sql);
if(!$d)
{
    echo mysql_error();

}

else
{
    echo "imported";

}
?>


