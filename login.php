<?php
if(session_id())
{

}
else
{
	session_start();
}

if(isset($_SESSION['sesUserType']) and  $_SESSION['sesUserType']=="user")
{
	echo "<script> location='login_success.php' </script>";
}
else if(isset($_SESSION['sesUserType']) and  $_SESSION['sesUserType']=="admin")
{

}
else
{

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
		<center>
		 <span>
		   <?php
			
			if(isset($_POST['login']))
			{
				include "connection/db_conn.php";
				$formUsername = $_POST['username'];
				$formPassword = $_POST['password'];
				$varStatus = '1';
			
				$varLoginQuery = "SELECT * FROM tbl_registration WHERE email='$formUsername' and password='$formPassword' and status='$varStatus'";
				$resLogin = $conn->query($varLoginQuery);
				$countRes = $resLogin->num_rows;
				$rowLogin = $resLogin->fetch_array();
				if($countRes == 1)
				{
					$_SESSION['sesID']=$rowLogin['id'];
					$_SESSION['sesUserType']=$rowLogin['usertype'];
					echo "<script> location='login_success.php' </script>";
				}
				else
				{
					echo "Invalid Login";
				}
				


			}
		   ?>
		 </span>
		</center>
		
	
		<form method="post">
		 <table align="center" style="border: 1px solid black">
		 	<tr>
		 		<td colspan="2" align="center">
		 			 <h1>User Login</h1>
		 		</td>
		 		
		 	</tr>

		 	<tr>
		 		<td>Username</td>
		 		<td><input type="text" name="username" required></td>
		 	</tr>

		 	<tr>
		 		<td>Password</td>
		 		<td><input type="password" name="password" required></td>
		 	</tr>
		 	<tr>
		 		<td colspan="2" align="center">
		 			<input type="submit" name="login" value="Login">
		 		</td>
		 		
		 	</tr>
		 	<tr>
		 		<td colspan="2" align="center">
		 			<a href="forgott.php">Forgott Password?</a> | 
		 			<a href="registration.php">New Registration?</a>
		 		</td>
		 		
		 	</tr>
		 	 
		 </table>
		 </form>
	</section>
<hr>
	<?php include "footer_tag.php"; ?>
<hr>
</body>
</html>




<?php
}
?>