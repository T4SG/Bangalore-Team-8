<?php
require('connection.php');
//echo $_SERVER['SCRIPT_FILENAME'];
//echo $_SERVER["DOENT_ROOT"];
//$tmpName  = $_FILES['file']['tmp_name'];
//echo $_FILES['file']['name'];

//echo mysql_real_escape_string($_POST['file']);
$sql="LOAD DATA LOCAL INFILE 'C:/Users/just/Documents/student_edu.csv' INTO TABLE stu_education FIELDS TERMINATED BY ',' ENCLOSED BY '' LINES TERMINATED BY '\r\n'(USN,branch,10th_perc,12th_diploma,sgpa_1,sgpa_2,sgpa_3,sgpa_4,sgpa_5,sgpa_6,cgpa,backlogs)";
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


