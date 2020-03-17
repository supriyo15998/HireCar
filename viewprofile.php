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
	<title>Profile | HireCar</title>
	<link rel="stylesheet" href="css/main1.css" />
</head>
<body>
	<table border=3 cellpadding="5">
		<thead>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Date of Birth</th>
			<th>Gender</th>
			<th>Street</th>
			<th>Location</th>
			<th>City</th>
			<th>Street</th>
			<th>Pin code</th>
			<th>Mobile number</th>
			<th>E-Mail</th>
		</thead>
		<td><?php echo $_SESSION['user']['fn']; ?></td>
		<td><?php echo $_SESSION['user']['ln']; ?></td>
		<td><?php echo $_SESSION['user']['dob']; ?></td>
		<td><?php echo $_SESSION['user']['gen']; ?></td>
		<td><?php echo $_SESSION['user']['Strt']; ?></td>
		<td><?php echo $_SESSION['user']['Loc']; ?></td>
		<td><?php echo $_SESSION['user']['Ct']; ?></td>
		<td><?php echo $_SESSION['user']['St']; ?></td>
		<td><?php echo $_SESSION['user']['Pin']; ?></td>
		<td><?php echo $_SESSION['user']['Mob']; ?></td>
		<td><?php echo $_SESSION['user']['mail']; ?></td>
	</table><br><br>
	<div style="margin-left: 30%;">
		<a href="welcome_user.php" style="text-decoration: none; background-color: rgb(140,235,193);color: black; padding: 6px;">click here to back home page</a><br><br>
		<a href="edit.php" style="text-decoration: none; background-color: rgb(140,235,193);color: black; padding: 6px;">Click here to edit details</a>
	</div><br><br><br><br><br><br>
	<footer id="footer">
		<div class="inner" style="height: 10px;">
			<div class="copyright" style="font-size: 25px;">
				Designed and Developed By: Web Solutions PVT LTD.
			</div>
		</div>
	</footer>
</body>
</html>