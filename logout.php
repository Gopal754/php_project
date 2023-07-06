<?php
if(session_id())
{

}
else
{
	session_start();
}


unset($_SESSION['sesID']);
session_destroy();

echo "<script> location='login.php' </script>";

?>