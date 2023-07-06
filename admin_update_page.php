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

	$varPageType = $_REQUEST['p'];
	$pageDataQuery = "SELECT * FROM tbl_page WHERE pagetype = '$varPageType'";
	include 'connection/db_conn.php';
	$resPageData = $conn->query($pageDataQuery);
	$rowPageData = $resPageData->fetch_array();

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
	  <h1 align="center"><?php echo $varPageType; ?> Page </h1>

	  <form method="post">
	  	<table align="center">

	  		<tr>
	  			<td><b><?php echo $varPageType; ?></b> Page Title</td>
	  			<td>
	  				<input type="text" name="page_title" value="<?php echo $rowPageData['title']; ?>">

	  				<input type="hidden" name="page_name" value="<?php echo $_REQUEST['p']; ?>">

	  			</td>
	  		</tr>

	  		<tr>
	  			<td><b><?php echo $_REQUEST['p']; ?></b> Page Description</td>
	  			<td><textarea name="page_desc"><?php echo $rowPageData['description']; ?></textarea></td>
	  		</tr>

	  		<tr>
	  			<td><b><?php echo $_REQUEST['p']; ?></b> Page Image</td>
	  			<td><input type="file" name="page_img"></td>
	  		</tr>

			<tr align="center">
 	  			<td colspan="2"><input type="submit" name="page_update" value="Update"></td>
	  		</tr>	  		


	  	</table>
	  	
	  	
	  		
	  	
	  	
	  </form>

		 <center>
		 	<b>
		 		<?php
		 		include "connection/db_conn.php";
		 		if(isset($_POST['page_update']))
		 		{
		 			$varTitle = $_POST['page_title'];
		 			$varDesc = $_POST['page_desc'];
		 			$varImg = $_POST['page_img'];
		 			$varPageName = $_POST['page_name'];


		 			 $varUpdatePage = "UPDATE tbl_page set title = '$varTitle', description = '$varDesc' WHERE pagetype = '$varPageName'";

		 			if ($conn->query($varUpdatePage) === TRUE)
		 			{
					    echo "";
					    echo "<script>alert('Record Updated')</script>";
					      echo "<script> location='admin_update_page.php?p=$varPageType' </script>";

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

		 	?>

		 	</b>
		 </center>
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