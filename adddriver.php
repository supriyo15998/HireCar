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
	<title>Driver Information</title>
</head>
<body>
	<form method="post" action="adddriverprocess.php">
		<center>
		<h1><b>DRIVER INFORMATION</b></h1>
		<label>NAME :- </label><input type="text" name="name"><br><br>
		<label>STREET :- </label><input type="text" name="street"><br><br>
		<label>LOCATION :- </label><input type="text" name="location"><br><br>
		<label>CITY :- </label><input type="text" name="city"><br><br>
		<label>STATE :- </label><input type="text" name="state"><br><br>
		<label>PINCODE :- </label><input type="number" name="pin"><br><br>
		<label>MOBILE NUMBER :- </label><input type="number" name="mobile"><br><br>
		<label>LICENSE :- </label><input type="text" name="license"><br><br>
		<input type="submit" name="Submit">
		<h3><a href="home_admin.php">Click Here</a> to go back to the Home Page</h3>
		</center>
	</form>

</body>
</html>