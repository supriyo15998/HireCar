<?php include('config.php') ?>
<?php 
$username = $_SESSION['admin']['name'];
if($username == true)
{

}
else
{
	header("Location: login.html");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | Admin</title>
</head>
<body>
	<h1 style="text-align: center; background-color: grey; color: white;">Welcome <?php echo $_SESSION['admin']['name']; ?></h1>
	<div style="margin-left: 40%;">
	<h3><a href="addcar.php" style="background-color: grey; color: white; padding: 4px; text-decoration: none;">Add or Edit or View Car Info</a></h3>
	<h3><a href="adddriver.php" style="background-color: grey; color: white; padding: 4px; text-decoration: none;">Add or Edit or View Driver Info</a></h3>
	<h3><a href="addroutes.php" style="background-color: grey; color: white; padding: 4px; text-decoration: none;">Add or Edit or View Route</a></h3>
	<h3>View Messages</h3>
	<h3><a href="changepass_admin.php" style="background-color: grey; color: white; padding: 4px; text-decoration: none;">Change Password</a></h3>
	
	<h3><a href="logout_admin.php" style="background-color: grey; color: white; padding: 4px; text-decoration: none;">Logout</a></h3>
	</div>
</body>
</html>