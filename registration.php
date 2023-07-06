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
		 		include "connection/db_conn.php";
		 		if(isset($_POST['register']))
		 		{
		 			$varFullName = $_POST['fullname'];
		 			$varEmail = $_POST['email'];
		 			$varMobile = $_POST['mobile'];
		 			$varPassword = $_POST['password'];

		 			$varRegSelect = "SELECT * FROM tbl_registration WHERE email = '$varEmail'";
		 			$resRegSelect = $conn->query($varRegSelect);
		 			$rowCount = $resRegSelect->num_rows;

		 			if($rowCount==0)
		 			{



		 			 $varRegInsert = "INSERT INTO tbl_registration(fullname, email, mobile, password) VALUES('$varFullName', '$varEmail', '$varMobile', '$varPassword');";

		 			if ($conn->query($varRegInsert) === TRUE)
		 			{
					    echo "";
					    echo "<span style='color:green'>Record Inserted</span>";

					} 
					else 
					{
						echo "<span style='color:orange;'>";
					    echo "Error: " . $conn->error;
					    echo "</span>";
					}
					// Closing connection
					$conn->close(); 

					}
					else
					{
						echo "<span style='color:red'>User Already Registered</span>";
					}
		 		}

		 	?>
		 </span>	
		 </center>
		 

		<form action="" method="post">
		 <table align="center" style="border: 1px solid black">
		 	<tr>
		 		<td colspan="2" align="center">
		 			 <h1>User Registration</h1>
		 		</td>
		 		
		 	</tr>

		 	<tr>
		 		<td>Fullname</td>
		 		<td><input type="text" name="fullname" required></td>
		 	</tr>

		 	<tr>
		 		<td>email</td>
		 		<td><input type="email" name="email" required></td>
		 	</tr>

		 	<tr>
		 		<td>Mobile</td>
		 		<td><input type="text" name="mobile" maxlength="10" minlength="10"   required></td>
		 	</tr>

		 	<tr>
		 		<td>Password</td>
		 		<td><input type="text" name="password" minlength="8" maxlength="8" required></td>
		 	</tr>
		 	<tr>
		 		<td colspan="2" align="center">
		 			<input type="submit" name="register" value="Register">
		 		</td>
		 		
		 	</tr>
		 	<tr>
		 		<td colspan="2" align="center">
		 		  
		 			<a href="login.php">Already Registered ?</a>
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



