<?php
if(session_id())
{

}
else
{
	session_start();
}


if(isset($_SESSION['sesUserType']) and  $_SESSION['sesUserType']=="admin")
{

	$varUserID = $_SESSION['sesID'];
	$UserInfoQuery = "SELECT * FROM tbl_registration WHERE status='1' and id=$varUserID";
	include 'connection/db_conn.php';
	$resUserInfo = $conn->query($UserInfoQuery);
	$rowUserInfo = $resUserInfo->fetch_array();
?>
<!DOCTYPE html>
<html>
<?php include "head_tag.php"; ?>
<body>
	<hr>
	<?php include "header_tag.php"; ?>
	<hr>
	<?php include "nav_tag.php"; ?>
	<hr>

	<section>
	 <h1>Manage Page</h1>
	 <ul>
	 	<li><a href="admin_update_page.php?p=Home">Update Home Page</a></li>
	 	<li><a href="admin_update_page.php?p=Services">Update Services Page</a></li>
	 	<li><a href="admin_update_page.php?p=About Us">Update About Us Page</a></li>
	 	<li><a href="admin_update_page.php?p=Contact Us">Update Contact Us Page</a></li>
	 </ul>

		 
	</section>
<hr>
	<?php include "footer_tag.php"; ?>
<hr>
</body>
</html>


<?php

}
else
{
  echo "<script> location='login.php' </script>";
}
?>