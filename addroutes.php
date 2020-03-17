<?php include('config.php') ?>
<?php 
$adminname = $_SESSION['admin']['name'];
if($adminname == true)
{

}
else
{
	header("Location: login_admin.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add routes</title>
</head>
<body>
	<h2 style="text-align: center;">Add Routes</h2>
	<center>
	<form method="post" action="routeprocess.php">
		<label><strong>Source:</strong></label><br>
		<input type="text" name="source" placeholder="Enter Source"><br>
		<label><strong>Destination:</strong></label><br>
		<input type="text" name="destination" placeholder="Enter Destination"><br>
		<label><strong>Distance:(km)</strong></label><br>
		<input type="number" name="distance" placeholder="Enter Distance"><br>
		<input type="submit" name="submit">
	</form>
	<a href="home_admin.php">Click here to back to the home page</a>
	</center>
</body>
</html>