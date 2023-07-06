<?php
	$varPageType = 'Home';
    if(isset($_REQUEST['p']))
    {
   		$varPageType = $_REQUEST['p'];
    }
	
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
		<h1><?php echo $rowPageData['title']; ?></h1>
		<p><?php echo $rowPageData['description']; ?></p>
	</section>
<hr>
	<?php include "footer_tag.php"; ?>
<hr>
</body>
</html>
