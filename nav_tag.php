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
?>

<nav>
		<a href="login_success.php">USER HOME</a> | 
		<a href="index.php?p=Services">SERVICES</a> | 
		<a href="index.php?p=About Us">ABOUT US</a> | 
		<a href="index.php?p=Contact Us">CONTACT US</a> | 
		<a href="logout.php">LOGOUT</a> | 
</nav>

<?php
}
else if(isset($_SESSION['sesUserType']) and  $_SESSION['sesUserType']=="admin")
{
?>

<nav>
		<a href="login_success.php">ADMIN HOME</a> | 
		<a href="admin_manage_page.php">MANAGE PAGES</a> | 
		<a href="admin_manage_user.php">MANAGE USER</a> | 
 		<a href="logout.php">LOGOUT</a> | 
</nav>

<?php
}
else
{
?>

<nav>
		<a href="index.php?p=Home">HOME</a> | 
		<a href="index.php?p=Services">SERVICES</a> | 
		<a href="index.php?p=About Us">ABOUT US</a> | 
		<a href="index.php?p=Contact Us">CONTACT US</a> | 
		<a href="login.php">LOGIN</a> | 
</nav>

<?php
}
?>


