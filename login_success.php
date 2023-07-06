<?php
if(session_id())
{

}
else
{
	session_start();
}
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
		<h1>Login Success</h1>
		<p> Welcome User <b><?php echo $rowUserInfo['fullname']; ?></b> and thanks for login.
		Your email id is <b><?php echo $rowUserInfo['email']; ?></b>. Your contact number is <b><?php echo $rowUserInfo['mobile']; ?></b>. and your application number is <b><?php echo sprintf("%06d",$rowUserInfo['id']); ?></b>.</p>


		 
	</section>
<hr>
	<?php include "footer_tag.php"; ?>
<hr>
</body>
</html>