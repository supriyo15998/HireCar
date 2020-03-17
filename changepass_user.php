<?php include('config.php') ?>
<?php 
$username = $_SESSION['user']['fn'];
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
	<title>CHANGE PASSWORD</title>
	<link rel="stylesheet" href="css/main1.css" />
</head>
<body>
	<h1 style="text-align: center; background-color: green; color: white; font-size: 25px;">CHANGE PASSWORD</h1>
	<form method="post" action="changepass_process.php" style="width: 40%; margin-left: 30%;">
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
		<input type="submit" name="submit">&emsp;
		<a href="welcome_user.php" style="text-decoration: none; background-color: rgb(140,235,193); color: black; padding: 12px; border-radius: 20px;">Back to home page</a>
	</form>

	<br><br><br>
	<footer id="footer">
		<div class="inner" style="height: 10px;">
			<div class="copyright" style="font-size: 25px;">
				Designed and Developed By: Web Solutions PVT LTD.
			</div>
		</div>
	</footer>
</body>
</html>