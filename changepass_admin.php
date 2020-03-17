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
	<title>CHANGE PASSWORD</title>
</head>
<body>
	<h1 style="text-align: center;">CHANGE PASSWORD</h1>
	<form method="post" action="changepassadmin_process.php">
		<table>
			<tr>
				<td>Old Password</td>
				<td><input type="password" name="oldpass"></td>
			</tr>
			<tr>
				<td>New Password</td>
				<td><input type="password" name="newpass"></td>
			</tr>
			<tr>
				<td>Confirm New Password</td>
				<td><input type="password" name="cnfpass"></td>
			</tr>
		</table>
		<input type="submit" name="submit">
	</form><br>
	<a href="home_admin.php" style="background-color: grey;color: white;text-decoration: none; font-size: 20px;">Click here to get back to the home page</a>
</body>
</html>