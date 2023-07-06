<?php
include "db_user.php";
$conn = new mysqli($mysql_servername,$mysql_username,$mysql_password,$mysql_database);

if($conn->connect_error)
{
	echo "Not Connected".$conn->connect_error;
}
else
{
	//echo "Connected";
}
?>

  
 